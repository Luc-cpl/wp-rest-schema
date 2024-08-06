<?php

namespace WpRestSchema;

use WpRestSchema\Schemas\Routes;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\InvalidValue;
use Swaggest\JsonSchema\Schema;
use WpRestSchema\Interfaces\RoutesInterface;
use InvalidArgumentException;

class Validator
{
    public function __construct(
        private ?RoutesInterface $routes = null,
    ) {
        if ($this->routes === null) {
            $this->routes = new Routes();
        }
    }

    /**
     * Validate the data against a route schema
     *
     * @throws InvalidArgumentException
     * @throws InvalidValue
     */
    public function validate(string $method, string $path, array $data): void
    {
        $path = '/' . trim($path, '/');
        $route = $this->getWPRoute($path);
        $data = array_merge($data, $route['params'] ?? []);

        $baseSchema = json_decode($route['schema']);

        $allowedMethods = $baseSchema->methods;

        if (!in_array($method, $allowedMethods, true)) {
            throw new InvalidArgumentException('Method not allowed for route: ' . $path);
        }

        $endpoint = (object) [
            '$schema' => 'http://json-schema.org/draft-04/schema#',
            'type' => 'object',
            'properties' => null,
        ];

        foreach ($baseSchema->endpoints as $e) {
            if (in_array($method, $e->methods, true)) {
                $endpoint->properties = $e->args ?? (object) [];
                break;
            }
        }

        // Force version to draft-04 as WordPress uses an subset of it
        $options = new Context();
        $options->version = Schema::VERSION_DRAFT_04;

        $this->fixRequiredValues($endpoint);
        $schema = Schema::import($endpoint, $options);

        $this->fixEmptyObjects($data, $endpoint);
        $schema->in((object) $data);
    }

    /**
     * Get the route for the given path
     *
     * @param string $path
     * @return array{schema:string,params?:string[]|int[]}
     */
    private function getWPRoute(string $path): array
    {
        $routes = $this->routes->getRoutes();
        
        if (isset($routes[$path])) {
            return ['schema' => $routes[$path]['class']::getSchema()];
        }

        foreach ($routes as $route => $schemas) {
            $params = $this->matchWPRoute($route, $path);
            if ($params !== false) {
                return ['schema' => $schemas['class']::getSchema(), 'params' => $params];
            }
        }

        throw new InvalidArgumentException('No route found for: ' . $path);
    }

    private function matchWPRoute($route, $path) {
        // Convert the route definition into a regular expression
        $regex = preg_replace('/\(\?P<(\w+)>/', '(?P<\1>', $route);
        $regex = str_replace('/', '\/', $regex);
        $regex = '/^' . $regex . '$/';
    
        if (preg_match($regex, $path, $matches)) {
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            $params = array_map(fn($param) => is_numeric($param) ? (int) $param : $param, $params);
            return $params;
        }

        return false;
    }

    private function fixRequiredValues(object &$schema): void
    {
        $propertiesArray = (array) $schema->properties;
        foreach ($propertiesArray as $key => &$property) {
            if (property_exists($property, 'required')) {
                if ($property->required) {
                    $schema->required ??= [];
                    $schema->required[] = $key;
                }
                unset($property->required);
            }
            if (property_exists($property, 'properties')) {
                $this->fixRequiredValues($property);
            }
        }

        $schema->properties = (object) $propertiesArray;
    }

    private function fixEmptyObjects(array &$data, object $schema): void
    {
        $propertiesArray = (array) $schema->properties;
        foreach ($propertiesArray as $key => &$property) {
            $current = &$data[$key] ?? null;
            if (property_exists($property, 'properties')) {
                if (empty($current)) {
                    $current = $property->type === 'object' ? (object) [] : $current;
                    continue;
                }

                $this->fixEmptyObjects($current, $property);
            }
        }
    }
}
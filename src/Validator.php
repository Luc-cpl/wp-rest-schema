<?php

namespace WpRestSchema;

use WpRestSchema\Interfaces\RouterInterface;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\InvalidValue;
use Swaggest\JsonSchema\Schema;
use InvalidArgumentException;

class Validator
{
    public function __construct(
        private ?RouterInterface $router = null,
    ) {
        if ($this->router === null) {
            $this->router = new Router();
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
        $route = $this->router->parse($path);
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

        $this->clearSchema($endpoint, $data);
        $this->fixRequiredValues($endpoint);
        $schema = Schema::import($endpoint, $options);

        $this->fixEmptyObjects($data, $endpoint);
        $schema->in((object) $data);
    }

    private function clearSchema(object &$schema, array &$data): void
    {
        $propertiesArray = (array) $schema->properties;
        foreach ($propertiesArray as $key => &$property) {
            if (!array_key_exists($key, $data) && (!property_exists($property, 'required') || !$property->required)) {
                unset($propertiesArray[$key]);
                continue;
            }

            if (property_exists($property, 'properties')) {
                $this->clearSchema($property, $data[$key]);
            }
        }

        $schema->properties = (object) $propertiesArray;
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
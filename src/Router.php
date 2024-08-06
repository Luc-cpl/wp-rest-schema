<?php

namespace WpRestSchema;

use WpRestSchema\Interfaces\RouterInterface;
use WpRestSchema\Interfaces\RoutesInterface;
use WpRestSchema\Schemas\Routes;
use InvalidArgumentException;

class Router implements RouterInterface
{
    public function __construct(
        private ?RoutesInterface $routes = null,
    ) {
        if ($this->routes === null) {
            $this->routes = new Routes();
        }
    }

    public function parse(string $path): array
    {
        $routes = $this->routes->getRoutes();

        if (isset($routes[$path])) {
            return [
                'route' => $path,
                'schema' => $routes[$path]['class']::getSchema()
            ];
        }

        foreach ($routes as $route => $schemas) {
            $params = $this->matchWPRoute($route, $path);
            if ($params !== false) {
                return [
                    'route' => $route,
                    'schema' => $schemas['class']::getSchema(),
                    'params' => $params
                ];
            }
        }

        throw new InvalidArgumentException('No route found for: ' . $path);
    }

    private function matchWPRoute($route, $path) {
        // Convert the route definition into a regular expression
        $regex = preg_replace('/\(\?P<(\w+)>/', '(?P<\1>', $route);
        $regex = str_replace('/', '\/', $regex);
        $regex = str_replace('\\\/', '\/', $regex);
        $regex = '/^' . $regex . '$/';
    
        if (preg_match($regex, $path, $matches)) {
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            $params = array_map(fn($param) => is_numeric($param) ? (int) $param : $param, $params);
            return $params;
        }

        return false;
    }
}
<?php

namespace WpRestSchema\Interfaces;

interface RoutesInterface
{
    /**
     * Get the routes.
     *
     * @return array<string,array{json: string, class: SchemaInterface}>
     */
    public function getRoutes(): array;
}
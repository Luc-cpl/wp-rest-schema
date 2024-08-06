<?php

namespace WpRestSchema\Interfaces;

interface RouterInterface
{
    /**
     * Get the route schema and params for the given path
     *
     * @param string $path
     * @return array{route:string,schema:string,params?:string[]|int[]}
     */
    public function parse(string $path): array;
}
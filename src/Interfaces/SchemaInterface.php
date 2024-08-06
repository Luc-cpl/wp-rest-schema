<?php

namespace WpRestSchema\Interfaces;

interface SchemaInterface
{
    /**
     * Get the json schema data
     *
     * @return string
     */
    public static function getSchema(): string;
}
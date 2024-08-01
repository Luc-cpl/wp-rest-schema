<?php

namespace WpRestSchema\Schemas\WpBlockEditor\V1;

class NavigationFallback
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp-block-editor\/v1",
            "methods": [
                "GET"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "args": []
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "navigation-fallback",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "The unique identifier for the Navigation Menu.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp-block-editor\/v1\/navigation-fallback"
                    }
                ]
            }
        }
        JSON;
    }
}

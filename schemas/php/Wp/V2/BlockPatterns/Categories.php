<?php

namespace WpRestSchema\Schemas\Wp\V2\BlockPatterns;

class Categories
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
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
                "title": "block-pattern-category",
                "type": "object",
                "properties": {
                    "name": {
                        "description": "The category name.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "label": {
                        "description": "The category label, in human readable format.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "description": {
                        "description": "The category description, in human readable format.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/block-patterns\/categories"
                    }
                ]
            }
        }
        JSON;
    }
}
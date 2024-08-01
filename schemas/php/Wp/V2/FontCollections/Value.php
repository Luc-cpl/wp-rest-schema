<?php

namespace WpRestSchema\Schemas\Wp\V2\FontCollections;

class Value
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
                    "args": {
                        "context": {
                            "description": "Scope under which the request is made; determines fields present in response.",
                            "type": "string",
                            "enum": [
                                "view",
                                "embed",
                                "edit"
                            ],
                            "default": "view",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "font-collection",
                "type": "object",
                "properties": {
                    "slug": {
                        "description": "Unique identifier for the font collection.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "name": {
                        "description": "The name for the font collection.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "description": {
                        "description": "The description for the font collection.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "font_families": {
                        "description": "The font families for the font collection.",
                        "type": "array",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "categories": {
                        "description": "The categories for the font collection.",
                        "type": "array",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    }
                }
            }
        }
        JSON;
    }
}

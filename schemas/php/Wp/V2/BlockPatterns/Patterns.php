<?php

namespace WpRestSchema\Schemas\Wp\V2\BlockPatterns;

class Patterns
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
                "title": "block-pattern",
                "type": "object",
                "properties": {
                    "name": {
                        "description": "The pattern name.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "title": {
                        "description": "The pattern title, in human readable format.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "content": {
                        "description": "The pattern content.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "description": {
                        "description": "The pattern detailed description.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "viewport_width": {
                        "description": "The pattern viewport width for inserter preview.",
                        "type": "number",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "inserter": {
                        "description": "Determines whether the pattern is visible in inserter.",
                        "type": "boolean",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "categories": {
                        "description": "The pattern category slugs.",
                        "type": "array",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "keywords": {
                        "description": "The pattern keywords.",
                        "type": "array",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "block_types": {
                        "description": "Block types that the pattern is intended to be used with.",
                        "type": "array",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "post_types": {
                        "description": "An array of post types that the pattern is restricted to be used with.",
                        "type": "array",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "template_types": {
                        "description": "An array of template types where the pattern fits.",
                        "type": "array",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "source": {
                        "description": "Where the pattern comes from e.g. core",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "enum": [
                            "core",
                            "plugin",
                            "theme",
                            "pattern-directory\/core",
                            "pattern-directory\/theme",
                            "pattern-directory\/featured"
                        ]
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/block-patterns\/patterns"
                    }
                ]
            }
        }
        JSON;
    }
}

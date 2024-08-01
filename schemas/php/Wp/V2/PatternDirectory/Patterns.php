<?php

namespace WpRestSchema\Schemas\Wp\V2\PatternDirectory;

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
                        },
                        "page": {
                            "description": "Current page of the collection.",
                            "type": "integer",
                            "default": 1,
                            "minimum": 1,
                            "required": false
                        },
                        "per_page": {
                            "description": "Maximum number of items to be returned in result set.",
                            "type": "integer",
                            "default": 100,
                            "minimum": 1,
                            "maximum": 100,
                            "required": false
                        },
                        "search": {
                            "description": "Limit results to those matching a string.",
                            "type": "string",
                            "minLength": 1,
                            "required": false
                        },
                        "category": {
                            "description": "Limit results to those matching a category ID.",
                            "type": "integer",
                            "minimum": 1,
                            "required": false
                        },
                        "keyword": {
                            "description": "Limit results to those matching a keyword ID.",
                            "type": "integer",
                            "minimum": 1,
                            "required": false
                        },
                        "slug": {
                            "description": "Limit results to those matching a pattern (slug).",
                            "type": "array",
                            "required": false
                        },
                        "offset": {
                            "description": "Offset the result set by a specific number of items.",
                            "type": "integer",
                            "required": false
                        },
                        "order": {
                            "description": "Order sort attribute ascending or descending.",
                            "type": "string",
                            "default": "desc",
                            "enum": [
                                "asc",
                                "desc"
                            ],
                            "required": false
                        },
                        "orderby": {
                            "description": "Sort collection by post attribute.",
                            "type": "string",
                            "default": "date",
                            "enum": [
                                "author",
                                "date",
                                "id",
                                "include",
                                "modified",
                                "parent",
                                "relevance",
                                "slug",
                                "include_slugs",
                                "title",
                                "favorite_count"
                            ],
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "pattern-directory-item",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "The pattern ID.",
                        "type": "integer",
                        "minimum": 1,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "title": {
                        "description": "The pattern title, in human readable format.",
                        "type": "string",
                        "minLength": 1,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "content": {
                        "description": "The pattern content.",
                        "type": "string",
                        "minLength": 1,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "categories": {
                        "description": "The pattern's category slugs.",
                        "type": "array",
                        "uniqueItems": true,
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "keywords": {
                        "description": "The pattern's keywords.",
                        "type": "array",
                        "uniqueItems": true,
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "description": {
                        "description": "A description of the pattern.",
                        "type": "string",
                        "minLength": 1,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "viewport_width": {
                        "description": "The preferred width of the viewport when previewing a pattern, in pixels.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "block_types": {
                        "description": "The block types which can use this pattern.",
                        "type": "array",
                        "uniqueItems": true,
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "embed"
                        ]
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/pattern-directory\/patterns"
                    }
                ]
            }
        }
        JSON;
    }
}

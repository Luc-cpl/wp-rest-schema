<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Search
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
                                "embed"
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
                            "default": 10,
                            "minimum": 1,
                            "maximum": 100,
                            "required": false
                        },
                        "search": {
                            "description": "Limit results to those matching a string.",
                            "type": "string",
                            "required": false
                        },
                        "type": {
                            "default": "post",
                            "description": "Limit results to items of an object type.",
                            "type": "string",
                            "enum": [
                                "post",
                                "term",
                                "post-format"
                            ],
                            "required": false
                        },
                        "subtype": {
                            "default": "any",
                            "description": "Limit results to items of one or more object subtypes.",
                            "type": "array",
                            "items": {
                                "enum": [
                                    "post",
                                    "page",
                                    "category",
                                    "post_tag",
                                    "any"
                                ],
                                "type": "string"
                            },
                            "required": false
                        },
                        "exclude": {
                            "description": "Ensure result set excludes specific IDs.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "include": {
                            "description": "Limit result set to specific IDs.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "search-result",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique identifier for the object.",
                        "type": [
                            "integer",
                            "string"
                        ],
                        "context": [
                            "view",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "title": {
                        "description": "The title for the object.",
                        "type": "string",
                        "context": [
                            "view",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "url": {
                        "description": "URL to the object.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "type": {
                        "description": "Object type.",
                        "type": "string",
                        "enum": [
                            "post",
                            "term",
                            "post-format"
                        ],
                        "context": [
                            "view",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "subtype": {
                        "description": "Object subtype.",
                        "type": "string",
                        "enum": [
                            "post",
                            "page",
                            "category",
                            "post_tag"
                        ],
                        "context": [
                            "view",
                            "embed"
                        ],
                        "readonly": true
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/search"
                    }
                ]
            }
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Wp\V2\BlockDirectory;

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
                                "view"
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
                        "term": {
                            "description": "Limit result set to blocks matching the search term.",
                            "type": "string",
                            "minLength": 1,
                            "required": true
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "block-directory-item",
                "type": "object",
                "properties": {
                    "name": {
                        "description": "The block name, in namespace\/block-name format.",
                        "type": "string",
                        "context": [
                            "view"
                        ]
                    },
                    "title": {
                        "description": "The block title, in human readable format.",
                        "type": "string",
                        "context": [
                            "view"
                        ]
                    },
                    "description": {
                        "description": "A short description of the block, in human readable format.",
                        "type": "string",
                        "context": [
                            "view"
                        ]
                    },
                    "id": {
                        "description": "The block slug.",
                        "type": "string",
                        "context": [
                            "view"
                        ]
                    },
                    "rating": {
                        "description": "The star rating of the block.",
                        "type": "number",
                        "context": [
                            "view"
                        ]
                    },
                    "rating_count": {
                        "description": "The number of ratings.",
                        "type": "integer",
                        "context": [
                            "view"
                        ]
                    },
                    "active_installs": {
                        "description": "The number sites that have activated this block.",
                        "type": "integer",
                        "context": [
                            "view"
                        ]
                    },
                    "author_block_rating": {
                        "description": "The average rating of blocks published by the same author.",
                        "type": "number",
                        "context": [
                            "view"
                        ]
                    },
                    "author_block_count": {
                        "description": "The number of blocks published by the same author.",
                        "type": "integer",
                        "context": [
                            "view"
                        ]
                    },
                    "author": {
                        "description": "The WordPress.org username of the block author.",
                        "type": "string",
                        "context": [
                            "view"
                        ]
                    },
                    "icon": {
                        "description": "The block icon.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view"
                        ]
                    },
                    "last_updated": {
                        "description": "The date when the block was last updated.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view"
                        ]
                    },
                    "humanized_updated": {
                        "description": "The date when the block was last updated, in fuzzy human readable format.",
                        "type": "string",
                        "context": [
                            "view"
                        ]
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/block-directory\/search"
                    }
                ]
            }
        }
        JSON;
    }
}

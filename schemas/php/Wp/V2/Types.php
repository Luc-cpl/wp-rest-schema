<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Types
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
                "title": "type",
                "type": "object",
                "properties": {
                    "capabilities": {
                        "description": "All capabilities used by the post type.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "description": {
                        "description": "A human-readable description of the post type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "hierarchical": {
                        "description": "Whether or not the post type should have children.",
                        "type": "boolean",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "viewable": {
                        "description": "Whether or not the post type can be viewed.",
                        "type": "boolean",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "labels": {
                        "description": "Human-readable labels for the post type for various contexts.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "name": {
                        "description": "The title for the post type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the post type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "supports": {
                        "description": "All features, supported by the post type.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "has_archive": {
                        "description": "If the value is a string, the value will be used as the archive slug. If the value is false the post type has no archive.",
                        "type": [
                            "string",
                            "boolean"
                        ],
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "taxonomies": {
                        "description": "Taxonomies associated with post type.",
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "rest_base": {
                        "description": "REST base route for the post type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "rest_namespace": {
                        "description": "REST route's namespace for the post type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "visibility": {
                        "description": "The visibility settings for the post type.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true,
                        "properties": {
                            "show_ui": {
                                "description": "Whether to generate a default UI for managing this post type.",
                                "type": "boolean"
                            },
                            "show_in_nav_menus": {
                                "description": "Whether to make the post type available for selection in navigation menus.",
                                "type": "boolean"
                            }
                        }
                    },
                    "icon": {
                        "description": "The icon for the post type.",
                        "type": [
                            "string",
                            "null"
                        ],
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "template": {
                        "type": [
                            "array"
                        ],
                        "description": "The block template associated with the post type.",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "template_lock": {
                        "type": [
                            "string",
                            "boolean"
                        ],
                        "enum": [
                            "all",
                            "insert",
                            "contentOnly",
                            false
                        ],
                        "description": "The template_lock associated with the post type, or false if none.",
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/types"
                    }
                ]
            }
        }
        JSON;
    }
}

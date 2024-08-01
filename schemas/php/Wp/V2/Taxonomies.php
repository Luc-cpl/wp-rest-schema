<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Taxonomies
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
                        "type": {
                            "description": "Limit results to taxonomies associated with a specific post type.",
                            "type": "string",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "taxonomy",
                "type": "object",
                "properties": {
                    "capabilities": {
                        "description": "All capabilities used by the taxonomy.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "description": {
                        "description": "A human-readable description of the taxonomy.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "hierarchical": {
                        "description": "Whether or not the taxonomy should have children.",
                        "type": "boolean",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "labels": {
                        "description": "Human-readable labels for the taxonomy for various contexts.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "name": {
                        "description": "The title for the taxonomy.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the taxonomy.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "show_cloud": {
                        "description": "Whether or not the term cloud should be displayed.",
                        "type": "boolean",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "types": {
                        "description": "Types associated with the taxonomy.",
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
                        "description": "REST base route for the taxonomy.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "rest_namespace": {
                        "description": "REST namespace route for the taxonomy.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "visibility": {
                        "description": "The visibility settings for the taxonomy.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true,
                        "properties": {
                            "public": {
                                "description": "Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users.",
                                "type": "boolean"
                            },
                            "publicly_queryable": {
                                "description": "Whether the taxonomy is publicly queryable.",
                                "type": "boolean"
                            },
                            "show_ui": {
                                "description": "Whether to generate a default UI for managing this taxonomy.",
                                "type": "boolean"
                            },
                            "show_admin_column": {
                                "description": "Whether to allow automatic creation of taxonomy columns on associated post-types table.",
                                "type": "boolean"
                            },
                            "show_in_nav_menus": {
                                "description": "Whether to make the taxonomy available for selection in navigation menus.",
                                "type": "boolean"
                            },
                            "show_in_quick_edit": {
                                "description": "Whether to show the taxonomy in the quick\/bulk edit panel.",
                                "type": "boolean"
                            }
                        }
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/taxonomies"
                    }
                ]
            }
        }
        JSON;
    }
}

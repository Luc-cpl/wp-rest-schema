<?php

namespace WpRestSchema\Schemas\Wp\V2\Sidebars;

class Value
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
            "methods": [
                "GET",
                "POST",
                "PUT",
                "PATCH"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "args": {
                        "id": {
                            "description": "The id of a registered sidebar",
                            "type": "string",
                            "required": false
                        },
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
                },
                {
                    "methods": [
                        "POST",
                        "PUT",
                        "PATCH"
                    ],
                    "args": {
                        "widgets": {
                            "description": "Nested widgets.",
                            "type": "array",
                            "items": {
                                "type": [
                                    "object",
                                    "string"
                                ]
                            },
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "sidebar",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "ID of sidebar.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "name": {
                        "description": "Unique name identifying the sidebar.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "description": {
                        "description": "Description of sidebar.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "class": {
                        "description": "Extra CSS class to assign to the sidebar in the Widgets interface.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "before_widget": {
                        "description": "HTML content to prepend to each widget's HTML output when assigned to this sidebar. Default is an opening list item element.",
                        "type": "string",
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "after_widget": {
                        "description": "HTML content to append to each widget's HTML output when assigned to this sidebar. Default is a closing list item element.",
                        "type": "string",
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "before_title": {
                        "description": "HTML content to prepend to the sidebar title when displayed. Default is an opening h2 element.",
                        "type": "string",
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "after_title": {
                        "description": "HTML content to append to the sidebar title when displayed. Default is a closing h2 element.",
                        "type": "string",
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "status": {
                        "description": "Status of sidebar.",
                        "type": "string",
                        "enum": [
                            "active",
                            "inactive"
                        ],
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "widgets": {
                        "description": "Nested widgets.",
                        "type": "array",
                        "items": {
                            "type": [
                                "object",
                                "string"
                            ]
                        },
                        "default": [],
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ]
                    }
                }
            }
        }
        JSON;
    }
}
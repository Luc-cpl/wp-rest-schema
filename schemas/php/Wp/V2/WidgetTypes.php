<?php

namespace WpRestSchema\Schemas\Wp\V2;

class WidgetTypes
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
                "title": "widget-type",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique slug identifying the widget type.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "name": {
                        "description": "Human-readable name identifying the widget type.",
                        "type": "string",
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "description": {
                        "description": "Description of the widget.",
                        "type": "string",
                        "default": "",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "is_multi": {
                        "description": "Whether the widget supports multiple instances",
                        "type": "boolean",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "classname": {
                        "description": "Class name",
                        "type": "string",
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/widget-types"
                    }
                ]
            }
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Wp\V2;

class MenuLocations
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
                "title": "menu-location",
                "type": "object",
                "properties": {
                    "name": {
                        "description": "The name of the menu location.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "description": {
                        "description": "The description of the menu location.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "menu": {
                        "description": "The ID of the assigned menu.",
                        "type": "integer",
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-locations"
                    }
                ]
            }
        }
        JSON;
    }
}

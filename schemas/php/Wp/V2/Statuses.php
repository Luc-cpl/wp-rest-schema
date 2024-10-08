<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Statuses
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
                "title": "status",
                "type": "object",
                "properties": {
                    "name": {
                        "description": "The title for the status.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "private": {
                        "description": "Whether posts with this status should be private.",
                        "type": "boolean",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "protected": {
                        "description": "Whether posts with this status should be protected.",
                        "type": "boolean",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "public": {
                        "description": "Whether posts of this status should be shown in the front end of the site.",
                        "type": "boolean",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "queryable": {
                        "description": "Whether posts with this status should be publicly-queryable.",
                        "type": "boolean",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "show_in_list": {
                        "description": "Whether to include posts in the edit listing for their post type.",
                        "type": "boolean",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the status.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "date_floating": {
                        "description": "Whether posts of this status may have floating published dates.",
                        "type": "boolean",
                        "context": [
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/statuses"
                    }
                ]
            }
        }
        JSON;
    }
}

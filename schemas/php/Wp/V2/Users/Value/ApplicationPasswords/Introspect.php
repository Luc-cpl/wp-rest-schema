<?php

namespace WpRestSchema\Schemas\Wp\V2\Users\Value\ApplicationPasswords;

class Introspect
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
                "title": "application-password",
                "type": "object",
                "properties": {
                    "uuid": {
                        "description": "The unique identifier for the application password.",
                        "type": "string",
                        "format": "uuid",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "app_id": {
                        "description": "A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.",
                        "type": "string",
                        "format": "uuid",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "name": {
                        "description": "The name of the application password.",
                        "type": "string",
                        "required": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "minLength": 1,
                        "pattern": ".*\\S.*"
                    },
                    "password": {
                        "description": "The generated password. Only available after adding an application.",
                        "type": "string",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "created": {
                        "description": "The GMT date the application password was created.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "last_used": {
                        "description": "The GMT date the application password was last used.",
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "last_ip": {
                        "description": "The IP address the application password was last used by.",
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "ip",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    }
                }
            }
        }
        JSON;
    }
}

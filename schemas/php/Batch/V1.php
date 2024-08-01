<?php

namespace WpRestSchema\Schemas\Batch;

class V1
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "",
            "methods": [
                "POST"
            ],
            "endpoints": [
                {
                    "methods": [
                        "POST"
                    ],
                    "args": {
                        "validation": {
                            "type": "string",
                            "enum": [
                                "require-all-validate",
                                "normal"
                            ],
                            "default": "normal",
                            "required": false
                        },
                        "requests": {
                            "type": "array",
                            "maxItems": 25,
                            "items": {
                                "type": "object",
                                "properties": {
                                    "method": {
                                        "type": "string",
                                        "enum": [
                                            "POST",
                                            "PUT",
                                            "PATCH",
                                            "DELETE"
                                        ],
                                        "default": "POST"
                                    },
                                    "path": {
                                        "type": "string",
                                        "required": true
                                    },
                                    "body": {
                                        "type": "object",
                                        "properties": [],
                                        "additionalProperties": true
                                    },
                                    "headers": {
                                        "type": "object",
                                        "properties": [],
                                        "additionalProperties": {
                                            "type": [
                                                "string",
                                                "array"
                                            ],
                                            "items": {
                                                "type": "string"
                                            }
                                        }
                                    }
                                }
                            },
                            "required": true
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/batch\/v1"
                    }
                ]
            }
        }
        JSON;
    }
}

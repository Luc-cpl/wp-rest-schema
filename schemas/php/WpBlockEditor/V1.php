<?php

namespace WpRestSchema\Schemas\WpBlockEditor;

class V1
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp-block-editor\/v1",
            "methods": [
                "GET"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "args": {
                        "namespace": {
                            "default": "wp-block-editor\/v1",
                            "required": false
                        },
                        "context": {
                            "default": "view",
                            "required": false
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp-block-editor\/v1"
                    }
                ]
            }
        }
        JSON;
    }
}

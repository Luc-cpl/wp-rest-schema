<?php

namespace WpRestSchema\Schemas\Wp;

class V2
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
                        "namespace": {
                            "default": "wp\/v2",
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
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2"
                    }
                ]
            }
        }
        JSON;
    }
}

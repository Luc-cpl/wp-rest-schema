<?php

namespace WpRestSchema\Schemas\Oembed;

class 1_0
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "oembed\/1.0",
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
                            "default": "oembed\/1.0",
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
                        "href": "http:\/\/localhost\/wp-json\/oembed\/1.0"
                    }
                ]
            }
        }
        JSON;
    }
}

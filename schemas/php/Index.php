<?php

namespace WpRestSchema\Schemas;

class Index
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "",
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
                            "default": "view",
                            "required": false
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/"
                    }
                ]
            }
        }
        JSON;
    }
}

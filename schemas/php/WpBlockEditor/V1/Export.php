<?php

namespace WpRestSchema\Schemas\WpBlockEditor\V1;

class Export
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
                    "args": []
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp-block-editor\/v1\/export"
                    }
                ]
            }
        }
        JSON;
    }
}

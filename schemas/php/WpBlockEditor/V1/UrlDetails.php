<?php

namespace WpRestSchema\Schemas\WpBlockEditor\V1;

class UrlDetails
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
                        "url": {
                            "description": "The URL to process.",
                            "type": "string",
                            "format": "uri",
                            "required": true
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp-block-editor\/v1\/url-details"
                    }
                ]
            }
        }
        JSON;
    }
}

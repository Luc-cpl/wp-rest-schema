<?php

namespace WpRestSchema\Schemas\Oembed\1.0;

class Embed
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
                        "url": {
                            "description": "The URL of the resource for which to fetch oEmbed data.",
                            "type": "string",
                            "format": "uri",
                            "required": true
                        },
                        "format": {
                            "default": "json",
                            "required": false
                        },
                        "maxwidth": {
                            "default": 600,
                            "required": false
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/oembed\/1.0\/embed"
                    }
                ]
            }
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Oembed\1.0;

class Proxy
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
                            "description": "The oEmbed format to use.",
                            "type": "string",
                            "default": "json",
                            "enum": [
                                "json",
                                "xml"
                            ],
                            "required": false
                        },
                        "maxwidth": {
                            "description": "The maximum width of the embed frame in pixels.",
                            "type": "integer",
                            "default": 600,
                            "required": false
                        },
                        "maxheight": {
                            "description": "The maximum height of the embed frame in pixels.",
                            "type": "integer",
                            "required": false
                        },
                        "discover": {
                            "description": "Whether to perform an oEmbed discovery request for unsanctioned providers.",
                            "type": "boolean",
                            "default": true,
                            "required": false
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/oembed\/1.0\/proxy"
                    }
                ]
            }
        }
        JSON;
    }
}

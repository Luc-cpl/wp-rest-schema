<?php

namespace WpRestSchema\Schemas\WpSiteHealth;

class V1
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp-site-health\/v1",
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
                            "default": "wp-site-health\/v1",
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
                        "href": "http:\/\/localhost\/wp-json\/wp-site-health\/v1"
                    }
                ]
            }
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\WpSiteHealth\V1;

class DirectorySizes
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
                    "args": []
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp-site-health\/v1\/directory-sizes"
                    }
                ]
            }
        }
        JSON;
    }
}

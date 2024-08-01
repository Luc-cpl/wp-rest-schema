<?php

namespace WpRestSchema\Schemas\WpSiteHealth\V1\Tests;

class PageCache
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
                        "href": "http:\/\/localhost\/wp-json\/wp-site-health\/v1\/tests\/page-cache"
                    }
                ]
            }
        }
        JSON;
    }
}

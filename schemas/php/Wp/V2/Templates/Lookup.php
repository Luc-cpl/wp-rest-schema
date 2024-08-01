<?php

namespace WpRestSchema\Schemas\Wp\V2\Templates;

class Lookup
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
                        "slug": {
                            "description": "The slug of the template to get the fallback for",
                            "type": "string",
                            "required": true
                        },
                        "is_custom": {
                            "description": "Indicates if a template is custom or part of the template hierarchy",
                            "type": "boolean",
                            "required": false
                        },
                        "template_prefix": {
                            "description": "The template prefix for the created template. This is used to extract the main template type, e.g. in `taxonomy-books` extracts the `taxonomy`",
                            "type": "string",
                            "required": false
                        }
                    }
                }
            ],
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/templates\/lookup"
                    }
                ]
            }
        }
        JSON;
    }
}
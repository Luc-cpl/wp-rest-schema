<?php

namespace WpRestSchema\Schemas\Wp\V2\GlobalStyles\Themes\Value;

class Variations
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
                    "allow_batch": {
                        "v1": false
                    },
                    "args": {
                        "stylesheet": {
                            "description": "The theme identifier",
                            "type": "string",
                            "required": false
                        }
                    }
                }
            ]
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Wp\V2\Media\Value;

class PostProcess
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
            "methods": [
                "POST"
            ],
            "endpoints": [
                {
                    "methods": [
                        "POST"
                    ],
                    "args": {
                        "id": {
                            "description": "Unique identifier for the attachment.",
                            "type": "integer",
                            "required": false
                        },
                        "action": {
                            "type": "string",
                            "enum": [
                                "create-image-subsizes"
                            ],
                            "required": true
                        }
                    }
                }
            ]
        }
        JSON;
    }
}

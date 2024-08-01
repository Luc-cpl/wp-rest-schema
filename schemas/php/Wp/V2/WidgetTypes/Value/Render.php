<?php

namespace WpRestSchema\Schemas\Wp\V2\WidgetTypes\Value;

class Render
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
                            "description": "The widget type id.",
                            "type": "string",
                            "required": true
                        },
                        "instance": {
                            "description": "Current instance settings of the widget.",
                            "type": "object",
                            "required": false
                        }
                    }
                }
            ]
        }
        JSON;
    }
}

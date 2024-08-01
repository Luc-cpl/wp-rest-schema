<?php

namespace WpRestSchema\Schemas\Wp\V2\Media\Value;

class Edit
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
                        "src": {
                            "description": "URL to the edited image file.",
                            "type": "string",
                            "format": "uri",
                            "required": true
                        },
                        "modifiers": {
                            "description": "Array of image edits.",
                            "type": "array",
                            "minItems": 1,
                            "items": {
                                "description": "Image edit.",
                                "type": "object",
                                "required": [
                                    "type",
                                    "args"
                                ],
                                "oneOf": [
                                    {
                                        "title": "Rotation",
                                        "properties": {
                                            "type": {
                                                "description": "Rotation type.",
                                                "type": "string",
                                                "enum": [
                                                    "rotate"
                                                ]
                                            },
                                            "args": {
                                                "description": "Rotation arguments.",
                                                "type": "object",
                                                "required": [
                                                    "angle"
                                                ],
                                                "properties": {
                                                    "angle": {
                                                        "description": "Angle to rotate clockwise in degrees.",
                                                        "type": "number"
                                                    }
                                                }
                                            }
                                        }
                                    },
                                    {
                                        "title": "Crop",
                                        "properties": {
                                            "type": {
                                                "description": "Crop type.",
                                                "type": "string",
                                                "enum": [
                                                    "crop"
                                                ]
                                            },
                                            "args": {
                                                "description": "Crop arguments.",
                                                "type": "object",
                                                "required": [
                                                    "left",
                                                    "top",
                                                    "width",
                                                    "height"
                                                ],
                                                "properties": {
                                                    "left": {
                                                        "description": "Horizontal position from the left to begin the crop as a percentage of the image width.",
                                                        "type": "number"
                                                    },
                                                    "top": {
                                                        "description": "Vertical position from the top to begin the crop as a percentage of the image height.",
                                                        "type": "number"
                                                    },
                                                    "width": {
                                                        "description": "Width of the crop as a percentage of the image width.",
                                                        "type": "number"
                                                    },
                                                    "height": {
                                                        "description": "Height of the crop as a percentage of the image height.",
                                                        "type": "number"
                                                    }
                                                }
                                            }
                                        }
                                    }
                                ]
                            },
                            "required": false
                        },
                        "rotation": {
                            "description": "The amount to rotate the image clockwise in degrees. DEPRECATED: Use `modifiers` instead.",
                            "type": "integer",
                            "minimum": 0,
                            "exclusiveMinimum": true,
                            "maximum": 360,
                            "exclusiveMaximum": true,
                            "required": false
                        },
                        "x": {
                            "description": "As a percentage of the image, the x position to start the crop from. DEPRECATED: Use `modifiers` instead.",
                            "type": "number",
                            "minimum": 0,
                            "maximum": 100,
                            "required": false
                        },
                        "y": {
                            "description": "As a percentage of the image, the y position to start the crop from. DEPRECATED: Use `modifiers` instead.",
                            "type": "number",
                            "minimum": 0,
                            "maximum": 100,
                            "required": false
                        },
                        "width": {
                            "description": "As a percentage of the image, the width to crop the image to. DEPRECATED: Use `modifiers` instead.",
                            "type": "number",
                            "minimum": 0,
                            "maximum": 100,
                            "required": false
                        },
                        "height": {
                            "description": "As a percentage of the image, the height to crop the image to. DEPRECATED: Use `modifiers` instead.",
                            "type": "number",
                            "minimum": 0,
                            "maximum": 100,
                            "required": false
                        }
                    }
                }
            ]
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Wp\V2\FontFamilies\Value\FontFaces;

class Value
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
            "methods": [
                "GET",
                "DELETE"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "args": {
                        "font_family_id": {
                            "description": "The ID for the parent font family of the font face.",
                            "type": "integer",
                            "required": true
                        },
                        "id": {
                            "description": "Unique identifier for the font face.",
                            "type": "integer",
                            "required": true
                        },
                        "context": {
                            "description": "Scope under which the request is made; determines fields present in response.",
                            "type": "string",
                            "enum": [
                                "view",
                                "embed",
                                "edit"
                            ],
                            "default": "view",
                            "required": false
                        }
                    }
                },
                {
                    "methods": [
                        "DELETE"
                    ],
                    "args": {
                        "font_family_id": {
                            "description": "The ID for the parent font family of the font face.",
                            "type": "integer",
                            "required": true
                        },
                        "id": {
                            "description": "Unique identifier for the font face.",
                            "type": "integer",
                            "required": true
                        },
                        "force": {
                            "type": "boolean",
                            "default": false,
                            "description": "Whether to bypass Trash and force deletion.",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "wp_font_face",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique identifier for the post.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "theme_json_version": {
                        "description": "Version of the theme.json schema used for the typography settings.",
                        "type": "integer",
                        "default": 3,
                        "minimum": 2,
                        "maximum": 3,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "parent": {
                        "description": "The ID for the parent font family of the font face.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "font_face_settings": {
                        "description": "font-face declaration in theme.json format.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "properties": {
                            "fontFamily": {
                                "description": "CSS font-family value.",
                                "type": "string",
                                "default": ""
                            },
                            "fontStyle": {
                                "description": "CSS font-style value.",
                                "type": "string",
                                "default": "normal"
                            },
                            "fontWeight": {
                                "description": "List of available font weights, separated by a space.",
                                "default": "400",
                                "type": [
                                    "string",
                                    "integer"
                                ]
                            },
                            "fontDisplay": {
                                "description": "CSS font-display value.",
                                "type": "string",
                                "default": "fallback",
                                "enum": [
                                    "auto",
                                    "block",
                                    "fallback",
                                    "swap",
                                    "optional"
                                ]
                            },
                            "src": {
                                "description": "Paths or URLs to the font files.",
                                "anyOf": [
                                    {
                                        "type": "string"
                                    },
                                    {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        }
                                    }
                                ],
                                "default": []
                            },
                            "fontStretch": {
                                "description": "CSS font-stretch value.",
                                "type": "string"
                            },
                            "ascentOverride": {
                                "description": "CSS ascent-override value.",
                                "type": "string"
                            },
                            "descentOverride": {
                                "description": "CSS descent-override value.",
                                "type": "string"
                            },
                            "fontVariant": {
                                "description": "CSS font-variant value.",
                                "type": "string"
                            },
                            "fontFeatureSettings": {
                                "description": "CSS font-feature-settings value.",
                                "type": "string"
                            },
                            "fontVariationSettings": {
                                "description": "CSS font-variation-settings value.",
                                "type": "string"
                            },
                            "lineGapOverride": {
                                "description": "CSS line-gap-override value.",
                                "type": "string"
                            },
                            "sizeAdjust": {
                                "description": "CSS size-adjust value.",
                                "type": "string"
                            },
                            "unicodeRange": {
                                "description": "CSS unicode-range value.",
                                "type": "string"
                            },
                            "preview": {
                                "description": "URL to a preview image of the font face.",
                                "type": "string",
                                "format": "uri",
                                "default": ""
                            }
                        },
                        "required": [
                            "fontFamily",
                            "src"
                        ],
                        "additionalProperties": false
                    }
                }
            }
        }
        JSON;
    }
}

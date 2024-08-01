<?php

namespace WpRestSchema\Schemas\Wp\V2\GlobalStyles\Value\Revisions;

class Value
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
                        "parent": {
                            "description": "The ID for the parent of the global styles revision.",
                            "type": "integer",
                            "required": false
                        },
                        "id": {
                            "description": "Unique identifier for the global styles revision.",
                            "type": "integer",
                            "required": false
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
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "wp_global_styles-revision",
                "type": "object",
                "properties": {
                    "author": {
                        "description": "The ID for the author of the revision.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "date": {
                        "description": "The date the revision was published, in the site's timezone.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "date_gmt": {
                        "description": "The date the revision was published, as GMT.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "id": {
                        "description": "ID of global styles config.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "modified": {
                        "description": "The date the revision was last modified, in the site's timezone.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "modified_gmt": {
                        "description": "The date the revision was last modified, as GMT.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "parent": {
                        "description": "The ID for the parent of the revision.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "styles": {
                        "description": "Global styles.",
                        "type": [
                            "object"
                        ],
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "settings": {
                        "description": "Global settings.",
                        "type": [
                            "object"
                        ],
                        "context": [
                            "view",
                            "edit"
                        ]
                    }
                }
            }
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Wp\V2\GlobalStyles;

class Value
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
            "methods": [
                "GET",
                "POST",
                "PUT",
                "PATCH"
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
                        "id": {
                            "description": "The id of a template",
                            "type": "string",
                            "required": false
                        }
                    }
                },
                {
                    "methods": [
                        "POST",
                        "PUT",
                        "PATCH"
                    ],
                    "allow_batch": {
                        "v1": false
                    },
                    "args": {
                        "styles": {
                            "description": "Global styles.",
                            "type": [
                                "object"
                            ],
                            "required": false
                        },
                        "settings": {
                            "description": "Global settings.",
                            "type": [
                                "object"
                            ],
                            "required": false
                        },
                        "title": {
                            "description": "Title of the global styles variation.",
                            "type": [
                                "object",
                                "string"
                            ],
                            "properties": {
                                "raw": {
                                    "description": "Title for the global styles variation, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit",
                                        "embed"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML title for the post, transformed for display.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit",
                                        "embed"
                                    ],
                                    "readonly": true
                                }
                            },
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "wp_global_styles",
                "type": "object",
                "properties": {
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
                    },
                    "title": {
                        "description": "Title of the global styles variation.",
                        "type": [
                            "object",
                            "string"
                        ],
                        "default": "",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Title for the global styles variation, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit",
                                    "embed"
                                ]
                            },
                            "rendered": {
                                "description": "HTML title for the post, transformed for display.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit",
                                    "embed"
                                ],
                                "readonly": true
                            }
                        }
                    }
                }
            }
        }
        JSON;
    }
}

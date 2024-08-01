<?php

namespace WpRestSchema\Schemas\Wp\V2\Widgets;

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
                "PATCH",
                "DELETE"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "allow_batch": {
                        "v1": true
                    },
                    "args": {
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
                        "POST",
                        "PUT",
                        "PATCH"
                    ],
                    "allow_batch": {
                        "v1": true
                    },
                    "args": {
                        "id": {
                            "description": "Unique identifier for the widget.",
                            "type": "string",
                            "required": false
                        },
                        "id_base": {
                            "description": "The type of the widget. Corresponds to ID in widget-types endpoint.",
                            "type": "string",
                            "required": false
                        },
                        "sidebar": {
                            "description": "The sidebar the widget belongs to.",
                            "type": "string",
                            "required": false
                        },
                        "instance": {
                            "description": "Instance settings of the widget, if supported.",
                            "type": "object",
                            "properties": {
                                "encoded": {
                                    "description": "Base64 encoded representation of the instance settings.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "hash": {
                                    "description": "Cryptographic hash of the instance settings.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "raw": {
                                    "description": "Unencoded instance settings, if supported.",
                                    "type": "object",
                                    "context": [
                                        "edit"
                                    ]
                                }
                            },
                            "required": false
                        },
                        "form_data": {
                            "description": "URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.",
                            "type": "string",
                            "required": false
                        }
                    }
                },
                {
                    "methods": [
                        "DELETE"
                    ],
                    "allow_batch": {
                        "v1": true
                    },
                    "args": {
                        "force": {
                            "description": "Whether to force removal of the widget, or move it to the inactive sidebar.",
                            "type": "boolean",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "widget",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique identifier for the widget.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "id_base": {
                        "description": "The type of the widget. Corresponds to ID in widget-types endpoint.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "sidebar": {
                        "description": "The sidebar the widget belongs to.",
                        "type": "string",
                        "default": "wp_inactive_widgets",
                        "required": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "rendered": {
                        "description": "HTML representation of the widget.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "rendered_form": {
                        "description": "HTML representation of the widget admin form.",
                        "type": "string",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "instance": {
                        "description": "Instance settings of the widget, if supported.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "default": null,
                        "properties": {
                            "encoded": {
                                "description": "Base64 encoded representation of the instance settings.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "hash": {
                                "description": "Cryptographic hash of the instance settings.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "raw": {
                                "description": "Unencoded instance settings, if supported.",
                                "type": "object",
                                "context": [
                                    "edit"
                                ]
                            }
                        }
                    },
                    "form_data": {
                        "description": "URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.",
                        "type": "string",
                        "context": []
                    }
                }
            }
        }
        JSON;
    }
}

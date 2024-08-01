<?php

namespace WpRestSchema\Schemas\Wp\V2\Menus;

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
                        "id": {
                            "description": "Unique identifier for the term.",
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
                            "description": "Unique identifier for the term.",
                            "type": "integer",
                            "required": false
                        },
                        "description": {
                            "description": "HTML description of the term.",
                            "type": "string",
                            "required": false
                        },
                        "name": {
                            "description": "HTML title for the term.",
                            "type": "string",
                            "required": false
                        },
                        "slug": {
                            "description": "An alphanumeric identifier for the term unique to its type.",
                            "type": "string",
                            "required": false
                        },
                        "meta": {
                            "description": "Meta fields.",
                            "type": "object",
                            "properties": [],
                            "required": false
                        },
                        "locations": {
                            "description": "The locations assigned to the menu.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "auto_add": {
                            "description": "Whether to automatically add top level pages to this menu.",
                            "type": "boolean",
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
                        "id": {
                            "description": "Unique identifier for the term.",
                            "type": "integer",
                            "required": false
                        },
                        "force": {
                            "type": "boolean",
                            "default": false,
                            "description": "Required to be true, as terms do not support trashing.",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "nav_menu",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique identifier for the term.",
                        "type": "integer",
                        "context": [
                            "view",
                            "embed",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "description": {
                        "description": "HTML description of the term.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "name": {
                        "description": "HTML title for the term.",
                        "type": "string",
                        "context": [
                            "view",
                            "embed",
                            "edit"
                        ],
                        "required": true
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the term unique to its type.",
                        "type": "string",
                        "context": [
                            "view",
                            "embed",
                            "edit"
                        ]
                    },
                    "meta": {
                        "description": "Meta fields.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": []
                    },
                    "locations": {
                        "description": "The locations assigned to the menu.",
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "auto_add": {
                        "description": "Whether to automatically add top level pages to this menu.",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "type": "boolean"
                    }
                }
            }
        }
        JSON;
    }
}

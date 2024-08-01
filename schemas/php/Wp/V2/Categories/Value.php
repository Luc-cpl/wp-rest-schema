<?php

namespace WpRestSchema\Schemas\Wp\V2\Categories;

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
                        "parent": {
                            "description": "The parent term ID.",
                            "type": "integer",
                            "required": false
                        },
                        "meta": {
                            "description": "Meta fields.",
                            "type": "object",
                            "properties": [],
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
                "title": "category",
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
                    "count": {
                        "description": "Number of published posts for the term.",
                        "type": "integer",
                        "context": [
                            "view",
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
                    "link": {
                        "description": "URL of the term.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "embed",
                            "edit"
                        ],
                        "readonly": true
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
                    "taxonomy": {
                        "description": "Type attribution for the term.",
                        "type": "string",
                        "enum": [
                            "category"
                        ],
                        "context": [
                            "view",
                            "embed",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "parent": {
                        "description": "The parent term ID.",
                        "type": "integer",
                        "context": [
                            "view",
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
                    }
                }
            }
        }
        JSON;
    }
}
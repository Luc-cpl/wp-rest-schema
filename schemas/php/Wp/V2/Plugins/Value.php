<?php

namespace WpRestSchema\Schemas\Wp\V2\Plugins;

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
                        },
                        "plugin": {
                            "type": "string",
                            "pattern": "[^.\\\/]+(?:\\\/[^.\\\/]+)?",
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
                        },
                        "plugin": {
                            "type": "string",
                            "pattern": "[^.\\\/]+(?:\\\/[^.\\\/]+)?",
                            "required": false
                        },
                        "status": {
                            "description": "The plugin activation status.",
                            "type": "string",
                            "enum": [
                                "inactive",
                                "active",
                                "network-active"
                            ],
                            "required": false
                        }
                    }
                },
                {
                    "methods": [
                        "DELETE"
                    ],
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
                        },
                        "plugin": {
                            "type": "string",
                            "pattern": "[^.\\\/]+(?:\\\/[^.\\\/]+)?",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "plugin",
                "type": "object",
                "properties": {
                    "plugin": {
                        "description": "The plugin file.",
                        "type": "string",
                        "pattern": "[^.\\\/]+(?:\\\/[^.\\\/]+)?",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "status": {
                        "description": "The plugin activation status.",
                        "type": "string",
                        "enum": [
                            "inactive",
                            "active",
                            "network-active"
                        ],
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "name": {
                        "description": "The plugin name.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "plugin_uri": {
                        "description": "The plugin's website address.",
                        "type": "string",
                        "format": "uri",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "author": {
                        "description": "The plugin author.",
                        "type": "object",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "author_uri": {
                        "description": "Plugin author's website address.",
                        "type": "string",
                        "format": "uri",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "description": {
                        "description": "The plugin description.",
                        "type": "object",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": {
                            "raw": {
                                "description": "The raw plugin description.",
                                "type": "string"
                            },
                            "rendered": {
                                "description": "The plugin description formatted for display.",
                                "type": "string"
                            }
                        }
                    },
                    "version": {
                        "description": "The plugin version number.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "network_only": {
                        "description": "Whether the plugin can only be activated network-wide.",
                        "type": "boolean",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "requires_wp": {
                        "description": "Minimum required version of WordPress.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "requires_php": {
                        "description": "Minimum required version of PHP.",
                        "type": "string",
                        "readonly": true,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "textdomain": {
                        "description": "The plugin's text domain.",
                        "type": "string",
                        "readonly": true,
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
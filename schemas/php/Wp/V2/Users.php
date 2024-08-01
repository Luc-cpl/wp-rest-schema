<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Users
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
            "methods": [
                "GET",
                "POST"
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
                        },
                        "page": {
                            "description": "Current page of the collection.",
                            "type": "integer",
                            "default": 1,
                            "minimum": 1,
                            "required": false
                        },
                        "per_page": {
                            "description": "Maximum number of items to be returned in result set.",
                            "type": "integer",
                            "default": 10,
                            "minimum": 1,
                            "maximum": 100,
                            "required": false
                        },
                        "search": {
                            "description": "Limit results to those matching a string.",
                            "type": "string",
                            "required": false
                        },
                        "exclude": {
                            "description": "Ensure result set excludes specific IDs.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "include": {
                            "description": "Limit result set to specific IDs.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "offset": {
                            "description": "Offset the result set by a specific number of items.",
                            "type": "integer",
                            "required": false
                        },
                        "order": {
                            "default": "asc",
                            "description": "Order sort attribute ascending or descending.",
                            "enum": [
                                "asc",
                                "desc"
                            ],
                            "type": "string",
                            "required": false
                        },
                        "orderby": {
                            "default": "name",
                            "description": "Sort collection by user attribute.",
                            "enum": [
                                "id",
                                "include",
                                "name",
                                "registered_date",
                                "slug",
                                "include_slugs",
                                "email",
                                "url"
                            ],
                            "type": "string",
                            "required": false
                        },
                        "slug": {
                            "description": "Limit result set to users with one or more specific slugs.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "roles": {
                            "description": "Limit result set to users matching at least one specific role provided. Accepts csv list or single role.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "capabilities": {
                            "description": "Limit result set to users matching at least one specific capability provided. Accepts csv list or single capability.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "who": {
                            "description": "Limit result set to users who are considered authors.",
                            "type": "string",
                            "enum": [
                                "authors"
                            ],
                            "required": false
                        },
                        "has_published_posts": {
                            "description": "Limit result set to users who have published posts.",
                            "type": [
                                "boolean",
                                "array"
                            ],
                            "items": {
                                "type": "string",
                                "enum": {
                                    "post": "post",
                                    "page": "page",
                                    "attachment": "attachment",
                                    "nav_menu_item": "nav_menu_item",
                                    "wp_block": "wp_block",
                                    "wp_template": "wp_template",
                                    "wp_template_part": "wp_template_part",
                                    "wp_global_styles": "wp_global_styles",
                                    "wp_navigation": "wp_navigation",
                                    "wp_font_family": "wp_font_family",
                                    "wp_font_face": "wp_font_face"
                                }
                            },
                            "required": false
                        }
                    }
                },
                {
                    "methods": [
                        "POST"
                    ],
                    "allow_batch": {
                        "v1": true
                    },
                    "args": {
                        "username": {
                            "description": "Login name for the user.",
                            "type": "string",
                            "required": true
                        },
                        "name": {
                            "description": "Display name for the user.",
                            "type": "string",
                            "required": false
                        },
                        "first_name": {
                            "description": "First name for the user.",
                            "type": "string",
                            "required": false
                        },
                        "last_name": {
                            "description": "Last name for the user.",
                            "type": "string",
                            "required": false
                        },
                        "email": {
                            "description": "The email address for the user.",
                            "type": "string",
                            "format": "email",
                            "required": true
                        },
                        "url": {
                            "description": "URL of the user.",
                            "type": "string",
                            "format": "uri",
                            "required": false
                        },
                        "description": {
                            "description": "Description of the user.",
                            "type": "string",
                            "required": false
                        },
                        "locale": {
                            "description": "Locale for the user.",
                            "type": "string",
                            "enum": [
                                "",
                                "en_US"
                            ],
                            "required": false
                        },
                        "nickname": {
                            "description": "The nickname for the user.",
                            "type": "string",
                            "required": false
                        },
                        "slug": {
                            "description": "An alphanumeric identifier for the user.",
                            "type": "string",
                            "required": false
                        },
                        "roles": {
                            "description": "Roles assigned to the user.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "password": {
                            "description": "Password for the user (never included).",
                            "type": "string",
                            "required": true
                        },
                        "meta": {
                            "description": "Meta fields.",
                            "type": "object",
                            "properties": {
                                "persisted_preferences": {
                                    "type": "object",
                                    "description": "",
                                    "default": [],
                                    "context": [
                                        "edit"
                                    ],
                                    "properties": {
                                        "_modified": {
                                            "description": "The date and time the preferences were updated.",
                                            "type": "string",
                                            "format": "date-time",
                                            "readonly": false
                                        }
                                    },
                                    "additionalProperties": true
                                }
                            },
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "user",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique identifier for the user.",
                        "type": "integer",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "username": {
                        "description": "Login name for the user.",
                        "type": "string",
                        "context": [
                            "edit"
                        ],
                        "required": true
                    },
                    "name": {
                        "description": "Display name for the user.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ]
                    },
                    "first_name": {
                        "description": "First name for the user.",
                        "type": "string",
                        "context": [
                            "edit"
                        ]
                    },
                    "last_name": {
                        "description": "Last name for the user.",
                        "type": "string",
                        "context": [
                            "edit"
                        ]
                    },
                    "email": {
                        "description": "The email address for the user.",
                        "type": "string",
                        "format": "email",
                        "context": [
                            "edit"
                        ],
                        "required": true
                    },
                    "url": {
                        "description": "URL of the user.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ]
                    },
                    "description": {
                        "description": "Description of the user.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ]
                    },
                    "link": {
                        "description": "Author URL of the user.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "locale": {
                        "description": "Locale for the user.",
                        "type": "string",
                        "enum": [
                            "",
                            "en_US"
                        ],
                        "context": [
                            "edit"
                        ]
                    },
                    "nickname": {
                        "description": "The nickname for the user.",
                        "type": "string",
                        "context": [
                            "edit"
                        ]
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the user.",
                        "type": "string",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ]
                    },
                    "registered_date": {
                        "description": "Registration date for the user.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "roles": {
                        "description": "Roles assigned to the user.",
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "edit"
                        ]
                    },
                    "password": {
                        "description": "Password for the user (never included).",
                        "type": "string",
                        "context": [],
                        "required": true
                    },
                    "capabilities": {
                        "description": "All capabilities assigned to the user.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "extra_capabilities": {
                        "description": "Any extra capabilities assigned to the user.",
                        "type": "object",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "avatar_urls": {
                        "description": "Avatar URLs for the user.",
                        "type": "object",
                        "context": [
                            "embed",
                            "view",
                            "edit"
                        ],
                        "readonly": true,
                        "properties": {
                            "24": {
                                "description": "Avatar URL with image size of 24 pixels.",
                                "type": "string",
                                "format": "uri",
                                "context": [
                                    "embed",
                                    "view",
                                    "edit"
                                ]
                            },
                            "48": {
                                "description": "Avatar URL with image size of 48 pixels.",
                                "type": "string",
                                "format": "uri",
                                "context": [
                                    "embed",
                                    "view",
                                    "edit"
                                ]
                            },
                            "96": {
                                "description": "Avatar URL with image size of 96 pixels.",
                                "type": "string",
                                "format": "uri",
                                "context": [
                                    "embed",
                                    "view",
                                    "edit"
                                ]
                            }
                        }
                    },
                    "meta": {
                        "description": "Meta fields.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": {
                            "persisted_preferences": {
                                "type": "object",
                                "description": "",
                                "default": [],
                                "context": [
                                    "edit"
                                ],
                                "properties": {
                                    "_modified": {
                                        "description": "The date and time the preferences were updated.",
                                        "type": "string",
                                        "format": "date-time",
                                        "readonly": false
                                    }
                                },
                                "additionalProperties": true
                            }
                        }
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/users"
                    }
                ]
            }
        }
        JSON;
    }
}

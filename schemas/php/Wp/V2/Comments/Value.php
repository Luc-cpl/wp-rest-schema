<?php

namespace WpRestSchema\Schemas\Wp\V2\Comments;

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
                        "id": {
                            "description": "Unique identifier for the comment.",
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
                        },
                        "password": {
                            "description": "The password for the parent post of the comment (if the post is password protected).",
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
                    "args": {
                        "id": {
                            "description": "Unique identifier for the comment.",
                            "type": "integer",
                            "required": false
                        },
                        "author": {
                            "description": "The ID of the user object, if author was a user.",
                            "type": "integer",
                            "required": false
                        },
                        "author_email": {
                            "description": "Email address for the comment author.",
                            "type": "string",
                            "format": "email",
                            "required": false
                        },
                        "author_ip": {
                            "description": "IP address for the comment author.",
                            "type": "string",
                            "format": "ip",
                            "required": false
                        },
                        "author_name": {
                            "description": "Display name for the comment author.",
                            "type": "string",
                            "required": false
                        },
                        "author_url": {
                            "description": "URL for the comment author.",
                            "type": "string",
                            "format": "uri",
                            "required": false
                        },
                        "author_user_agent": {
                            "description": "User agent for the comment author.",
                            "type": "string",
                            "required": false
                        },
                        "content": {
                            "description": "The content for the comment.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Content for the comment, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML content for the comment, transformed for display.",
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
                        },
                        "date": {
                            "description": "The date the comment was published, in the site's timezone.",
                            "type": "string",
                            "format": "date-time",
                            "required": false
                        },
                        "date_gmt": {
                            "description": "The date the comment was published, as GMT.",
                            "type": "string",
                            "format": "date-time",
                            "required": false
                        },
                        "parent": {
                            "description": "The ID for the parent of the comment.",
                            "type": "integer",
                            "required": false
                        },
                        "post": {
                            "description": "The ID of the associated post object.",
                            "type": "integer",
                            "required": false
                        },
                        "status": {
                            "description": "State of the comment.",
                            "type": "string",
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
                    "args": {
                        "id": {
                            "description": "Unique identifier for the comment.",
                            "type": "integer",
                            "required": false
                        },
                        "force": {
                            "type": "boolean",
                            "default": false,
                            "description": "Whether to bypass Trash and force deletion.",
                            "required": false
                        },
                        "password": {
                            "description": "The password for the parent post of the comment (if the post is password protected).",
                            "type": "string",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "comment",
                "type": "object",
                "properties": {
                    "id": {
                        "description": "Unique identifier for the comment.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "author": {
                        "description": "The ID of the user object, if author was a user.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "author_email": {
                        "description": "Email address for the comment author.",
                        "type": "string",
                        "format": "email",
                        "context": [
                            "edit"
                        ]
                    },
                    "author_ip": {
                        "description": "IP address for the comment author.",
                        "type": "string",
                        "format": "ip",
                        "context": [
                            "edit"
                        ]
                    },
                    "author_name": {
                        "description": "Display name for the comment author.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "author_url": {
                        "description": "URL for the comment author.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "author_user_agent": {
                        "description": "User agent for the comment author.",
                        "type": "string",
                        "context": [
                            "edit"
                        ]
                    },
                    "content": {
                        "description": "The content for the comment.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Content for the comment, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "rendered": {
                                "description": "HTML content for the comment, transformed for display.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit",
                                    "embed"
                                ],
                                "readonly": true
                            }
                        }
                    },
                    "date": {
                        "description": "The date the comment was published, in the site's timezone.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "date_gmt": {
                        "description": "The date the comment was published, as GMT.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "link": {
                        "description": "URL to the comment.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "parent": {
                        "description": "The ID for the parent of the comment.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "default": 0
                    },
                    "post": {
                        "description": "The ID of the associated post object.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "default": 0
                    },
                    "status": {
                        "description": "State of the comment.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "type": {
                        "description": "Type of the comment.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "author_avatar_urls": {
                        "description": "Avatar URLs for the comment author.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
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
                        "properties": []
                    }
                }
            }
        }
        JSON;
    }
}

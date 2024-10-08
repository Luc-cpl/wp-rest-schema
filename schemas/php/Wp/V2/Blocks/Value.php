<?php

namespace WpRestSchema\Schemas\Wp\V2\Blocks;

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
                            "description": "Unique identifier for the post.",
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
                        "excerpt_length": {
                            "description": "Override the default excerpt length.",
                            "type": "integer",
                            "required": false
                        },
                        "password": {
                            "description": "The password for the post if it is password protected.",
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
                        "v1": true
                    },
                    "args": {
                        "id": {
                            "description": "Unique identifier for the post.",
                            "type": "integer",
                            "required": false
                        },
                        "date": {
                            "description": "The date the post was published, in the site's timezone.",
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "required": false
                        },
                        "date_gmt": {
                            "description": "The date the post was published, as GMT.",
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "required": false
                        },
                        "slug": {
                            "description": "An alphanumeric identifier for the post unique to its type.",
                            "type": "string",
                            "required": false
                        },
                        "status": {
                            "description": "A named status for the post.",
                            "type": "string",
                            "enum": [
                                "publish",
                                "future",
                                "draft",
                                "pending",
                                "private"
                            ],
                            "required": false
                        },
                        "password": {
                            "description": "A password to protect access to the content and excerpt.",
                            "type": "string",
                            "required": false
                        },
                        "title": {
                            "description": "The title for the post.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Title for the post, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit"
                                    ]
                                }
                            },
                            "required": false
                        },
                        "content": {
                            "description": "The content for the post.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Content for the post, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit"
                                    ]
                                },
                                "block_version": {
                                    "description": "Version of the content block format used by the post.",
                                    "type": "integer",
                                    "context": [
                                        "edit"
                                    ],
                                    "readonly": true
                                },
                                "protected": {
                                    "description": "Whether the content is protected with a password.",
                                    "type": "boolean",
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
                        "excerpt": {
                            "description": "The excerpt for the post.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Excerpt for the post, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML excerpt for the post, transformed for display.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit",
                                        "embed"
                                    ],
                                    "readonly": true
                                },
                                "protected": {
                                    "description": "Whether the excerpt is protected with a password.",
                                    "type": "boolean",
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
                        "meta": {
                            "description": "Meta fields.",
                            "type": "object",
                            "properties": {
                                "wp_pattern_sync_status": {
                                    "type": "string",
                                    "description": "",
                                    "default": "",
                                    "enum": [
                                        "partial",
                                        "unsynced"
                                    ]
                                },
                                "footnotes": {
                                    "type": "string",
                                    "description": "",
                                    "default": ""
                                }
                            },
                            "required": false
                        },
                        "template": {
                            "description": "The theme file to use to display the post.",
                            "type": "string",
                            "required": false
                        },
                        "wp_pattern_category": {
                            "description": "The terms assigned to the post in the wp_pattern_category taxonomy.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
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
                            "description": "Unique identifier for the post.",
                            "type": "integer",
                            "required": false
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
                "title": "wp_block",
                "type": "object",
                "properties": {
                    "date": {
                        "description": "The date the post was published, in the site's timezone.",
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "date_gmt": {
                        "description": "The date the post was published, as GMT.",
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "guid": {
                        "description": "The globally unique identifier for the post.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "GUID for the post, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ],
                                "readonly": true
                            },
                            "rendered": {
                                "description": "GUID for the post, transformed for display.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit"
                                ],
                                "readonly": true
                            }
                        }
                    },
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
                    "link": {
                        "description": "URL to the post.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "modified": {
                        "description": "The date the post was last modified, in the site's timezone.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "modified_gmt": {
                        "description": "The date the post was last modified, as GMT.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the post unique to its type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "status": {
                        "description": "A named status for the post.",
                        "type": "string",
                        "enum": [
                            "publish",
                            "future",
                            "draft",
                            "pending",
                            "private"
                        ],
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "type": {
                        "description": "Type of post.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "password": {
                        "description": "A password to protect access to the content and excerpt.",
                        "type": "string",
                        "context": [
                            "edit"
                        ]
                    },
                    "title": {
                        "description": "The title for the post.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Title for the post, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit"
                                ]
                            }
                        }
                    },
                    "content": {
                        "description": "The content for the post.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Content for the post, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit"
                                ]
                            },
                            "block_version": {
                                "description": "Version of the content block format used by the post.",
                                "type": "integer",
                                "context": [
                                    "edit"
                                ],
                                "readonly": true
                            },
                            "protected": {
                                "description": "Whether the content is protected with a password.",
                                "type": "boolean",
                                "context": [
                                    "view",
                                    "edit",
                                    "embed"
                                ],
                                "readonly": true
                            }
                        }
                    },
                    "excerpt": {
                        "description": "The excerpt for the post.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Excerpt for the post, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "rendered": {
                                "description": "HTML excerpt for the post, transformed for display.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit",
                                    "embed"
                                ],
                                "readonly": true
                            },
                            "protected": {
                                "description": "Whether the excerpt is protected with a password.",
                                "type": "boolean",
                                "context": [
                                    "view",
                                    "edit",
                                    "embed"
                                ],
                                "readonly": true
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
                            "wp_pattern_sync_status": {
                                "type": "string",
                                "description": "",
                                "default": "",
                                "enum": [
                                    "partial",
                                    "unsynced"
                                ]
                            },
                            "footnotes": {
                                "type": "string",
                                "description": "",
                                "default": ""
                            }
                        }
                    },
                    "template": {
                        "description": "The theme file to use to display the post.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "wp_pattern_category": {
                        "description": "The terms assigned to the post in the wp_pattern_category taxonomy.",
                        "type": "array",
                        "items": {
                            "type": "integer"
                        },
                        "context": [
                            "view",
                            "edit"
                        ]
                    }
                },
                "links": [
                    {
                        "rel": "https:\/\/api.w.org\/action-publish",
                        "title": "The current user can publish this post.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/blocks\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "status": {
                                    "type": "string",
                                    "enum": [
                                        "publish",
                                        "future"
                                    ]
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-unfiltered-html",
                        "title": "The current user can post unfiltered HTML markup and JavaScript.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/blocks\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "content": {
                                    "raw": {
                                        "type": "string"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-assign-wp_pattern_category",
                        "title": "The current user can assign terms in the wp_pattern_category taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/blocks\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "wp_pattern_category": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-create-wp_pattern_category",
                        "title": "The current user can create terms in the wp_pattern_category taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/blocks\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "wp_pattern_category": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    }
                ]
            }
        }
        JSON;
    }
}

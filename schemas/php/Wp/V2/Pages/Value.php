<?php

namespace WpRestSchema\Schemas\Wp\V2\Pages;

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
                        "parent": {
                            "description": "The ID for the parent of the post.",
                            "type": "integer",
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
                                        "edit"
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
                        },
                        "content": {
                            "description": "The content for the post.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Content for the post, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML content for the post, transformed for display.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit"
                                    ],
                                    "readonly": true
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
                        "author": {
                            "description": "The ID for the author of the post.",
                            "type": "integer",
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
                        "featured_media": {
                            "description": "The ID of the featured media for the post.",
                            "type": "integer",
                            "required": false
                        },
                        "comment_status": {
                            "description": "Whether or not comments are open on the post.",
                            "type": "string",
                            "enum": [
                                "open",
                                "closed"
                            ],
                            "required": false
                        },
                        "ping_status": {
                            "description": "Whether or not the post can be pinged.",
                            "type": "string",
                            "enum": [
                                "open",
                                "closed"
                            ],
                            "required": false
                        },
                        "menu_order": {
                            "description": "The order of the post in relation to other posts.",
                            "type": "integer",
                            "required": false
                        },
                        "meta": {
                            "description": "Meta fields.",
                            "type": "object",
                            "properties": {
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
                "title": "page",
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
                    "permalink_template": {
                        "description": "Permalink template for the post.",
                        "type": "string",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "generated_slug": {
                        "description": "Slug automatically generated from the post title.",
                        "type": "string",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    },
                    "class_list": {
                        "description": "An array of the class names for the post container element.",
                        "type": "array",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "readonly": true,
                        "items": {
                            "type": "string"
                        }
                    },
                    "parent": {
                        "description": "The ID for the parent of the post.",
                        "type": "integer",
                        "context": [
                            "view",
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
                                    "edit"
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
                                    "edit"
                                ]
                            },
                            "rendered": {
                                "description": "HTML content for the post, transformed for display.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit"
                                ],
                                "readonly": true
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
                    "author": {
                        "description": "The ID for the author of the post.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
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
                    "featured_media": {
                        "description": "The ID of the featured media for the post.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "comment_status": {
                        "description": "Whether or not comments are open on the post.",
                        "type": "string",
                        "enum": [
                            "open",
                            "closed"
                        ],
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "ping_status": {
                        "description": "Whether or not the post can be pinged.",
                        "type": "string",
                        "enum": [
                            "open",
                            "closed"
                        ],
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "menu_order": {
                        "description": "The order of the post in relation to other posts.",
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
                        "properties": {
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
                    }
                },
                "links": [
                    {
                        "rel": "https:\/\/api.w.org\/action-publish",
                        "title": "The current user can publish this post.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/pages\/{id}",
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/pages\/{id}",
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
                        "rel": "https:\/\/api.w.org\/action-assign-author",
                        "title": "The current user can change the author on this post.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/pages\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "author": {
                                    "type": "integer"
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

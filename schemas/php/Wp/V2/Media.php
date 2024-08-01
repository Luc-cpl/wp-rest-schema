<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Media
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
                        "after": {
                            "description": "Limit response to posts published after a given ISO8601 compliant date.",
                            "type": "string",
                            "format": "date-time",
                            "required": false
                        },
                        "modified_after": {
                            "description": "Limit response to posts modified after a given ISO8601 compliant date.",
                            "type": "string",
                            "format": "date-time",
                            "required": false
                        },
                        "author": {
                            "description": "Limit result set to posts assigned to specific authors.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "author_exclude": {
                            "description": "Ensure result set excludes posts assigned to specific authors.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "before": {
                            "description": "Limit response to posts published before a given ISO8601 compliant date.",
                            "type": "string",
                            "format": "date-time",
                            "required": false
                        },
                        "modified_before": {
                            "description": "Limit response to posts modified before a given ISO8601 compliant date.",
                            "type": "string",
                            "format": "date-time",
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
                            "description": "Order sort attribute ascending or descending.",
                            "type": "string",
                            "default": "desc",
                            "enum": [
                                "asc",
                                "desc"
                            ],
                            "required": false
                        },
                        "orderby": {
                            "description": "Sort collection by post attribute.",
                            "type": "string",
                            "default": "date",
                            "enum": [
                                "author",
                                "date",
                                "id",
                                "include",
                                "modified",
                                "parent",
                                "relevance",
                                "slug",
                                "include_slugs",
                                "title"
                            ],
                            "required": false
                        },
                        "parent": {
                            "description": "Limit result set to items with particular parent IDs.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "parent_exclude": {
                            "description": "Limit result set to all items except those of a particular parent ID.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "default": [],
                            "required": false
                        },
                        "search_columns": {
                            "default": [],
                            "description": "Array of column names to be searched.",
                            "type": "array",
                            "items": {
                                "enum": [
                                    "post_title",
                                    "post_content",
                                    "post_excerpt"
                                ],
                                "type": "string"
                            },
                            "required": false
                        },
                        "slug": {
                            "description": "Limit result set to posts with one or more specific slugs.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "status": {
                            "default": "inherit",
                            "description": "Limit result set to posts assigned one or more statuses.",
                            "type": "array",
                            "items": {
                                "enum": [
                                    "inherit",
                                    "private",
                                    "trash"
                                ],
                                "type": "string"
                            },
                            "required": false
                        },
                        "media_type": {
                            "default": null,
                            "description": "Limit result set to attachments of a particular media type.",
                            "type": "string",
                            "enum": [
                                "image",
                                "video",
                                "audio",
                                "application"
                            ],
                            "required": false
                        },
                        "mime_type": {
                            "default": null,
                            "description": "Limit result set to attachments of a particular MIME type.",
                            "type": "string",
                            "required": false
                        }
                    }
                },
                {
                    "methods": [
                        "POST"
                    ],
                    "args": {
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
                        "author": {
                            "description": "The ID for the author of the post.",
                            "type": "integer",
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
                        "meta": {
                            "description": "Meta fields.",
                            "type": "object",
                            "properties": [],
                            "required": false
                        },
                        "template": {
                            "description": "The theme file to use to display the post.",
                            "type": "string",
                            "required": false
                        },
                        "alt_text": {
                            "description": "Alternative text to display when attachment is not displayed.",
                            "type": "string",
                            "required": false
                        },
                        "caption": {
                            "description": "The attachment caption.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Caption for the attachment, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML caption for the attachment, transformed for display.",
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
                        "description": {
                            "description": "The attachment description.",
                            "type": "object",
                            "properties": {
                                "raw": {
                                    "description": "Description for the attachment, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML description for the attachment, transformed for display.",
                                    "type": "string",
                                    "context": [
                                        "view",
                                        "edit"
                                    ],
                                    "readonly": true
                                }
                            },
                            "required": false
                        },
                        "post": {
                            "description": "The ID for the associated post of the attachment.",
                            "type": "integer",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "attachment",
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
                    "author": {
                        "description": "The ID for the author of the post.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
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
                    "meta": {
                        "description": "Meta fields.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": []
                    },
                    "template": {
                        "description": "The theme file to use to display the post.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "alt_text": {
                        "description": "Alternative text to display when attachment is not displayed.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "caption": {
                        "description": "The attachment caption.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Caption for the attachment, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "rendered": {
                                "description": "HTML caption for the attachment, transformed for display.",
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
                    "description": {
                        "description": "The attachment description.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Description for the attachment, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "rendered": {
                                "description": "HTML description for the attachment, transformed for display.",
                                "type": "string",
                                "context": [
                                    "view",
                                    "edit"
                                ],
                                "readonly": true
                            }
                        }
                    },
                    "media_type": {
                        "description": "Attachment type.",
                        "type": "string",
                        "enum": [
                            "image",
                            "file"
                        ],
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "mime_type": {
                        "description": "The attachment MIME type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "media_details": {
                        "description": "Details about the media file, specific to its type.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "post": {
                        "description": "The ID for the associated post of the attachment.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "source_url": {
                        "description": "URL to the original attachment file.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "missing_image_sizes": {
                        "description": "List of the missing image sizes of the attachment.",
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    }
                },
                "links": [
                    {
                        "rel": "https:\/\/api.w.org\/action-unfiltered-html",
                        "title": "The current user can post unfiltered HTML markup and JavaScript.",
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/media\/{id}",
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
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/media\/{id}",
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
            },
            "_links": {
                "self": [
                    {
                        "href": "https:\/\/wp-ultimo.localhost\/wp-json\/wp\/v2\/media"
                    }
                ]
            }
        }
        JSON;
    }
}

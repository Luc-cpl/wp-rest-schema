<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Posts
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
                            "default": "publish",
                            "description": "Limit result set to posts assigned one or more statuses.",
                            "type": "array",
                            "items": {
                                "enum": [
                                    "publish",
                                    "future",
                                    "draft",
                                    "pending",
                                    "private",
                                    "trash",
                                    "auto-draft",
                                    "inherit",
                                    "request-pending",
                                    "request-confirmed",
                                    "request-failed",
                                    "request-completed",
                                    "any"
                                ],
                                "type": "string"
                            },
                            "required": false
                        },
                        "tax_relation": {
                            "description": "Limit result set based on relationship between multiple taxonomies.",
                            "type": "string",
                            "enum": [
                                "AND",
                                "OR"
                            ],
                            "required": false
                        },
                        "categories": {
                            "description": "Limit result set to items with specific terms assigned in the categories taxonomy.",
                            "type": [
                                "object",
                                "array"
                            ],
                            "oneOf": [
                                {
                                    "title": "Term ID List",
                                    "description": "Match terms with the listed IDs.",
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                },
                                {
                                    "title": "Term ID Taxonomy Query",
                                    "description": "Perform an advanced term query.",
                                    "type": "object",
                                    "properties": {
                                        "terms": {
                                            "description": "Term IDs.",
                                            "type": "array",
                                            "items": {
                                                "type": "integer"
                                            },
                                            "default": []
                                        },
                                        "include_children": {
                                            "description": "Whether to include child terms in the terms limiting the result set.",
                                            "type": "boolean",
                                            "default": false
                                        },
                                        "operator": {
                                            "description": "Whether items must be assigned all or any of the specified terms.",
                                            "type": "string",
                                            "enum": [
                                                "AND",
                                                "OR"
                                            ],
                                            "default": "OR"
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            ],
                            "required": false
                        },
                        "categories_exclude": {
                            "description": "Limit result set to items except those with specific terms assigned in the categories taxonomy.",
                            "type": [
                                "object",
                                "array"
                            ],
                            "oneOf": [
                                {
                                    "title": "Term ID List",
                                    "description": "Match terms with the listed IDs.",
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                },
                                {
                                    "title": "Term ID Taxonomy Query",
                                    "description": "Perform an advanced term query.",
                                    "type": "object",
                                    "properties": {
                                        "terms": {
                                            "description": "Term IDs.",
                                            "type": "array",
                                            "items": {
                                                "type": "integer"
                                            },
                                            "default": []
                                        },
                                        "include_children": {
                                            "description": "Whether to include child terms in the terms limiting the result set.",
                                            "type": "boolean",
                                            "default": false
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            ],
                            "required": false
                        },
                        "tags": {
                            "description": "Limit result set to items with specific terms assigned in the tags taxonomy.",
                            "type": [
                                "object",
                                "array"
                            ],
                            "oneOf": [
                                {
                                    "title": "Term ID List",
                                    "description": "Match terms with the listed IDs.",
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                },
                                {
                                    "title": "Term ID Taxonomy Query",
                                    "description": "Perform an advanced term query.",
                                    "type": "object",
                                    "properties": {
                                        "terms": {
                                            "description": "Term IDs.",
                                            "type": "array",
                                            "items": {
                                                "type": "integer"
                                            },
                                            "default": []
                                        },
                                        "operator": {
                                            "description": "Whether items must be assigned all or any of the specified terms.",
                                            "type": "string",
                                            "enum": [
                                                "AND",
                                                "OR"
                                            ],
                                            "default": "OR"
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            ],
                            "required": false
                        },
                        "tags_exclude": {
                            "description": "Limit result set to items except those with specific terms assigned in the tags taxonomy.",
                            "type": [
                                "object",
                                "array"
                            ],
                            "oneOf": [
                                {
                                    "title": "Term ID List",
                                    "description": "Match terms with the listed IDs.",
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                },
                                {
                                    "title": "Term ID Taxonomy Query",
                                    "description": "Perform an advanced term query.",
                                    "type": "object",
                                    "properties": {
                                        "terms": {
                                            "description": "Term IDs.",
                                            "type": "array",
                                            "items": {
                                                "type": "integer"
                                            },
                                            "default": []
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            ],
                            "required": false
                        },
                        "sticky": {
                            "description": "Limit result set to items that are sticky.",
                            "type": "boolean",
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
                        "format": {
                            "description": "The format for the post.",
                            "type": "string",
                            "enum": [
                                "standard",
                                "aside",
                                "chat",
                                "gallery",
                                "link",
                                "image",
                                "quote",
                                "status",
                                "video",
                                "audio"
                            ],
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
                        "sticky": {
                            "description": "Whether or not the post should be treated as sticky.",
                            "type": "boolean",
                            "required": false
                        },
                        "template": {
                            "description": "The theme file to use to display the post.",
                            "type": "string",
                            "required": false
                        },
                        "categories": {
                            "description": "The terms assigned to the post in the category taxonomy.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "required": false
                        },
                        "tags": {
                            "description": "The terms assigned to the post in the post_tag taxonomy.",
                            "type": "array",
                            "items": {
                                "type": "integer"
                            },
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "post",
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
                    "format": {
                        "description": "The format for the post.",
                        "type": "string",
                        "enum": [
                            "standard",
                            "aside",
                            "chat",
                            "gallery",
                            "link",
                            "image",
                            "quote",
                            "status",
                            "video",
                            "audio"
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
                        "properties": {
                            "footnotes": {
                                "type": "string",
                                "description": "",
                                "default": ""
                            }
                        }
                    },
                    "sticky": {
                        "description": "Whether or not the post should be treated as sticky.",
                        "type": "boolean",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "template": {
                        "description": "The theme file to use to display the post.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "categories": {
                        "description": "The terms assigned to the post in the category taxonomy.",
                        "type": "array",
                        "items": {
                            "type": "integer"
                        },
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "tags": {
                        "description": "The terms assigned to the post in the post_tag taxonomy.",
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
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
                        "rel": "https:\/\/api.w.org\/action-sticky",
                        "title": "The current user can sticky this post.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "sticky": {
                                    "type": "boolean"
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-assign-author",
                        "title": "The current user can change the author on this post.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "author": {
                                    "type": "integer"
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-assign-categories",
                        "title": "The current user can assign terms in the category taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "categories": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-create-categories",
                        "title": "The current user can create terms in the category taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "categories": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-assign-tags",
                        "title": "The current user can assign terms in the post_tag taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "tags": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-create-tags",
                        "title": "The current user can create terms in the post_tag taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "tags": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    }
                ]
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/posts"
                    }
                ]
            }
        }
        JSON;
    }
}

<?php

namespace WpRestSchema\Schemas\Wp\V2;

class MenuItems
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
                            "default": 100,
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
                            "default": "asc",
                            "enum": [
                                "asc",
                                "desc"
                            ],
                            "required": false
                        },
                        "orderby": {
                            "description": "Sort collection by object attribute.",
                            "type": "string",
                            "default": "menu_order",
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
                                "title",
                                "menu_order"
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
                        "menus": {
                            "description": "Limit result set to items with specific terms assigned in the menus taxonomy.",
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
                        "menus_exclude": {
                            "description": "Limit result set to items except those with specific terms assigned in the menus taxonomy.",
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
                        "menu_order": {
                            "description": "Limit result set to posts with a specific menu_order value.",
                            "type": "integer",
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
                        "title": {
                            "description": "The title for the object.",
                            "type": [
                                "string",
                                "object"
                            ],
                            "properties": {
                                "raw": {
                                    "description": "Title for the object, as it exists in the database.",
                                    "type": "string",
                                    "context": [
                                        "edit"
                                    ]
                                },
                                "rendered": {
                                    "description": "HTML title for the object, transformed for display.",
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
                        "type": {
                            "default": "custom",
                            "description": "The family of objects originally represented, such as \"post_type\" or \"taxonomy\".",
                            "type": "string",
                            "enum": [
                                "taxonomy",
                                "post_type",
                                "post_type_archive",
                                "custom"
                            ],
                            "required": false
                        },
                        "status": {
                            "default": "publish",
                            "description": "A named status for the object.",
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
                        "parent": {
                            "default": 0,
                            "description": "The ID for the parent of the object.",
                            "type": "integer",
                            "minimum": 0,
                            "required": false
                        },
                        "attr_title": {
                            "description": "Text for the title attribute of the link element for this menu item.",
                            "type": "string",
                            "required": false
                        },
                        "classes": {
                            "description": "Class names for the link element of this menu item.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "description": {
                            "description": "The description of this menu item.",
                            "type": "string",
                            "required": false
                        },
                        "menu_order": {
                            "default": 1,
                            "description": "The DB ID of the nav_menu_item that is this item's menu parent, if any, otherwise 0.",
                            "type": "integer",
                            "minimum": 1,
                            "required": false
                        },
                        "object": {
                            "description": "The type of object originally represented, such as \"category\", \"post\", or \"attachment\".",
                            "type": "string",
                            "required": false
                        },
                        "object_id": {
                            "default": 0,
                            "description": "The database ID of the original object this menu item represents, for example the ID for posts or the term_id for categories.",
                            "type": "integer",
                            "minimum": 0,
                            "required": false
                        },
                        "target": {
                            "description": "The target attribute of the link element for this menu item.",
                            "type": "string",
                            "enum": [
                                "_blank",
                                ""
                            ],
                            "required": false
                        },
                        "url": {
                            "description": "The URL to which this menu item points.",
                            "type": "string",
                            "format": "uri",
                            "required": false
                        },
                        "xfn": {
                            "description": "The XFN relationship expressed in the link of this menu item.",
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "required": false
                        },
                        "menus": {
                            "description": "The terms assigned to the object in the nav_menu taxonomy.",
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
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "nav_menu_item",
                "type": "object",
                "properties": {
                    "title": {
                        "description": "The title for the object.",
                        "type": [
                            "string",
                            "object"
                        ],
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "properties": {
                            "raw": {
                                "description": "Title for the object, as it exists in the database.",
                                "type": "string",
                                "context": [
                                    "edit"
                                ]
                            },
                            "rendered": {
                                "description": "HTML title for the object, transformed for display.",
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
                    "id": {
                        "description": "Unique identifier for the object.",
                        "type": "integer",
                        "default": 0,
                        "minimum": 0,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "type_label": {
                        "description": "The singular label used to describe this type of menu item.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "readonly": true
                    },
                    "type": {
                        "description": "The family of objects originally represented, such as \"post_type\" or \"taxonomy\".",
                        "type": "string",
                        "enum": [
                            "taxonomy",
                            "post_type",
                            "post_type_archive",
                            "custom"
                        ],
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "default": "custom"
                    },
                    "status": {
                        "description": "A named status for the object.",
                        "type": "string",
                        "enum": [
                            "publish",
                            "future",
                            "draft",
                            "pending",
                            "private"
                        ],
                        "default": "publish",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "parent": {
                        "description": "The ID for the parent of the object.",
                        "type": "integer",
                        "minimum": 0,
                        "default": 0,
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "attr_title": {
                        "description": "Text for the title attribute of the link element for this menu item.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "classes": {
                        "description": "Class names for the link element of this menu item.",
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "description": {
                        "description": "The description of this menu item.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "menu_order": {
                        "description": "The DB ID of the nav_menu_item that is this item's menu parent, if any, otherwise 0.",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "type": "integer",
                        "minimum": 1,
                        "default": 1
                    },
                    "object": {
                        "description": "The type of object originally represented, such as \"category\", \"post\", or \"attachment\".",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "type": "string"
                    },
                    "object_id": {
                        "description": "The database ID of the original object this menu item represents, for example the ID for posts or the term_id for categories.",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "type": "integer",
                        "minimum": 0,
                        "default": 0
                    },
                    "target": {
                        "description": "The target attribute of the link element for this menu item.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "enum": [
                            "_blank",
                            ""
                        ]
                    },
                    "url": {
                        "description": "The URL to which this menu item points.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "xfn": {
                        "description": "The XFN relationship expressed in the link of this menu item.",
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "invalid": {
                        "description": "Whether the menu item represents an object that no longer exists.",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ],
                        "type": "boolean",
                        "readonly": true
                    },
                    "menus": {
                        "description": "The terms assigned to the object in the nav_menu taxonomy.",
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
                },
                "links": [
                    {
                        "rel": "https:\/\/api.w.org\/action-publish",
                        "title": "The current user can publish this post.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-items\/{id}",
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-items\/{id}",
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
                        "rel": "https:\/\/api.w.org\/action-assign-menus",
                        "title": "The current user can assign terms in the nav_menu taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-items\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "menus": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/action-create-menus",
                        "title": "The current user can create terms in the nav_menu taxonomy.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-items\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "menus": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    },
                    {
                        "rel": "https:\/\/api.w.org\/menu-item-object",
                        "title": "Get linked object.",
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-items\/{id}",
                        "targetSchema": {
                            "type": "object",
                            "properties": {
                                "object": {
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
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/menu-items"
                    }
                ]
            }
        }
        JSON;
    }
}

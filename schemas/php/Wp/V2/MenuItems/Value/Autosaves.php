<?php

namespace WpRestSchema\Schemas\Wp\V2\MenuItems\Value;

class Autosaves
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
                        "parent": {
                            "description": "The ID for the parent of the autosave.",
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
                        "POST"
                    ],
                    "args": {
                        "parent": {
                            "description": "The ID for the parent of the object.",
                            "type": "integer",
                            "minimum": 0,
                            "required": false
                        },
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
                "title": "nav_menu_item-revision",
                "type": "object",
                "properties": {
                    "author": {
                        "description": "The ID for the author of the revision.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "date": {
                        "description": "The date the revision was published, in the site's timezone.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "date_gmt": {
                        "description": "The date the revision was published, as GMT.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "guid": {
                        "description": "GUID for the revision, as it exists in the database.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "id": {
                        "description": "Unique identifier for the revision.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "modified": {
                        "description": "The date the revision was last modified, in the site's timezone.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "modified_gmt": {
                        "description": "The date the revision was last modified, as GMT.",
                        "type": "string",
                        "format": "date-time",
                        "context": [
                            "view",
                            "edit"
                        ]
                    },
                    "parent": {
                        "description": "The ID for the parent of the revision.",
                        "type": "integer",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
                    "slug": {
                        "description": "An alphanumeric identifier for the revision unique to its type.",
                        "type": "string",
                        "context": [
                            "view",
                            "edit",
                            "embed"
                        ]
                    },
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
                    "meta": {
                        "description": "Meta fields.",
                        "type": "object",
                        "context": [
                            "view",
                            "edit"
                        ],
                        "properties": []
                    },
                    "preview_link": {
                        "description": "Preview link for the post.",
                        "type": "string",
                        "format": "uri",
                        "context": [
                            "edit"
                        ],
                        "readonly": true
                    }
                }
            }
        }
        JSON;
    }
}

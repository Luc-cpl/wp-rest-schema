<?php

namespace WpRestSchema\Schemas\Wp\V2\Posts\Value;

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
                            "description": "The ID for the parent of the autosave.",
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
                "title": "post-revision",
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
                            "footnotes": {
                                "type": "string",
                                "description": "",
                                "default": ""
                            }
                        }
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
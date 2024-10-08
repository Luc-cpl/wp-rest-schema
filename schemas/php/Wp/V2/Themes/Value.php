<?php

namespace WpRestSchema\Schemas\Wp\V2\Themes;

class Value
{
    public static function getSchema()
    {
        return <<<'JSON'
        {
            "namespace": "wp\/v2",
            "methods": [
                "GET"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "args": {
                        "stylesheet": {
                            "description": "The theme's stylesheet. This uniquely identifies the theme.",
                            "type": "string",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "theme",
                "type": "object",
                "properties": {
                    "stylesheet": {
                        "description": "The theme's stylesheet. This uniquely identifies the theme.",
                        "type": "string",
                        "readonly": true
                    },
                    "stylesheet_uri": {
                        "description": "The uri for the theme's stylesheet directory.",
                        "type": "string",
                        "format": "uri",
                        "readonly": true
                    },
                    "template": {
                        "description": "The theme's template. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme's stylesheet.",
                        "type": "string",
                        "readonly": true
                    },
                    "template_uri": {
                        "description": "The uri for the theme's template directory. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme's stylesheet directory.",
                        "type": "string",
                        "format": "uri",
                        "readonly": true
                    },
                    "author": {
                        "description": "The theme author.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "The theme author's name, as found in the theme header.",
                                "type": "string"
                            },
                            "rendered": {
                                "description": "HTML for the theme author, transformed for display.",
                                "type": "string"
                            }
                        }
                    },
                    "author_uri": {
                        "description": "The website of the theme author.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "The website of the theme author, as found in the theme header.",
                                "type": "string",
                                "format": "uri"
                            },
                            "rendered": {
                                "description": "The website of the theme author, transformed for display.",
                                "type": "string",
                                "format": "uri"
                            }
                        }
                    },
                    "description": {
                        "description": "A description of the theme.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "The theme description, as found in the theme header.",
                                "type": "string"
                            },
                            "rendered": {
                                "description": "The theme description, transformed for display.",
                                "type": "string"
                            }
                        }
                    },
                    "is_block_theme": {
                        "description": "Whether the theme is a block-based theme.",
                        "type": "boolean",
                        "readonly": true
                    },
                    "name": {
                        "description": "The name of the theme.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "The theme name, as found in the theme header.",
                                "type": "string"
                            },
                            "rendered": {
                                "description": "The theme name, transformed for display.",
                                "type": "string"
                            }
                        }
                    },
                    "requires_php": {
                        "description": "The minimum PHP version required for the theme to work.",
                        "type": "string",
                        "readonly": true
                    },
                    "requires_wp": {
                        "description": "The minimum WordPress version required for the theme to work.",
                        "type": "string",
                        "readonly": true
                    },
                    "screenshot": {
                        "description": "The theme's screenshot URL.",
                        "type": "string",
                        "format": "uri",
                        "readonly": true
                    },
                    "tags": {
                        "description": "Tags indicating styles and features of the theme.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "The theme tags, as found in the theme header.",
                                "type": "array",
                                "items": {
                                    "type": "string"
                                }
                            },
                            "rendered": {
                                "description": "The theme tags, transformed for display.",
                                "type": "string"
                            }
                        }
                    },
                    "textdomain": {
                        "description": "The theme's text domain.",
                        "type": "string",
                        "readonly": true
                    },
                    "theme_supports": {
                        "description": "Features supported by this theme.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "align-wide": {
                                "description": "Whether theme opts in to wide alignment CSS class.",
                                "type": "boolean",
                                "default": false
                            },
                            "automatic-feed-links": {
                                "description": "Whether posts and comments RSS feed links are added to head.",
                                "type": "boolean",
                                "default": false
                            },
                            "block-templates": {
                                "description": "Whether a theme uses block-based templates.",
                                "type": "boolean",
                                "default": false
                            },
                            "block-template-parts": {
                                "description": "Whether a theme uses block-based template parts.",
                                "type": "boolean",
                                "default": false
                            },
                            "custom-background": {
                                "description": "Custom background if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "object"
                                ],
                                "default": false,
                                "properties": {
                                    "default-image": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "default-preset": {
                                        "type": "string",
                                        "enum": [
                                            "default",
                                            "fill",
                                            "fit",
                                            "repeat",
                                            "custom"
                                        ]
                                    },
                                    "default-position-x": {
                                        "type": "string",
                                        "enum": [
                                            "left",
                                            "center",
                                            "right"
                                        ]
                                    },
                                    "default-position-y": {
                                        "type": "string",
                                        "enum": [
                                            "left",
                                            "center",
                                            "right"
                                        ]
                                    },
                                    "default-size": {
                                        "type": "string",
                                        "enum": [
                                            "auto",
                                            "contain",
                                            "cover"
                                        ]
                                    },
                                    "default-repeat": {
                                        "type": "string",
                                        "enum": [
                                            "repeat-x",
                                            "repeat-y",
                                            "repeat",
                                            "no-repeat"
                                        ]
                                    },
                                    "default-attachment": {
                                        "type": "string",
                                        "enum": [
                                            "scroll",
                                            "fixed"
                                        ]
                                    },
                                    "default-color": {
                                        "type": "string"
                                    }
                                },
                                "additionalProperties": false
                            },
                            "custom-header": {
                                "description": "Custom header if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "object"
                                ],
                                "default": false,
                                "properties": {
                                    "default-image": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "random-default": {
                                        "type": "boolean"
                                    },
                                    "width": {
                                        "type": "integer"
                                    },
                                    "height": {
                                        "type": "integer"
                                    },
                                    "flex-height": {
                                        "type": "boolean"
                                    },
                                    "flex-width": {
                                        "type": "boolean"
                                    },
                                    "default-text-color": {
                                        "type": "string"
                                    },
                                    "header-text": {
                                        "type": "boolean"
                                    },
                                    "uploads": {
                                        "type": "boolean"
                                    },
                                    "video": {
                                        "type": "boolean"
                                    }
                                },
                                "additionalProperties": false
                            },
                            "custom-logo": {
                                "description": "Custom logo if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "object"
                                ],
                                "default": false,
                                "properties": {
                                    "width": {
                                        "type": "integer"
                                    },
                                    "height": {
                                        "type": "integer"
                                    },
                                    "flex-width": {
                                        "type": "boolean"
                                    },
                                    "flex-height": {
                                        "type": "boolean"
                                    },
                                    "header-text": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        }
                                    },
                                    "unlink-homepage-logo": {
                                        "type": "boolean"
                                    }
                                },
                                "additionalProperties": false
                            },
                            "customize-selective-refresh-widgets": {
                                "description": "Whether the theme enables Selective Refresh for Widgets being managed with the Customizer.",
                                "type": "boolean",
                                "default": false
                            },
                            "dark-editor-style": {
                                "description": "Whether theme opts in to the dark editor style UI.",
                                "type": "boolean",
                                "default": false
                            },
                            "disable-custom-colors": {
                                "description": "Whether the theme disables custom colors.",
                                "type": "boolean",
                                "default": false
                            },
                            "disable-custom-font-sizes": {
                                "description": "Whether the theme disables custom font sizes.",
                                "type": "boolean",
                                "default": false
                            },
                            "disable-custom-gradients": {
                                "description": "Whether the theme disables custom gradients.",
                                "type": "boolean",
                                "default": false
                            },
                            "disable-layout-styles": {
                                "description": "Whether the theme disables generated layout styles.",
                                "type": "boolean",
                                "default": false
                            },
                            "editor-color-palette": {
                                "description": "Custom color palette if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "array"
                                ],
                                "default": false,
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string"
                                        },
                                        "slug": {
                                            "type": "string"
                                        },
                                        "color": {
                                            "type": "string"
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            },
                            "editor-font-sizes": {
                                "description": "Custom font sizes if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "array"
                                ],
                                "default": false,
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string"
                                        },
                                        "size": {
                                            "type": "number"
                                        },
                                        "slug": {
                                            "type": "string"
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            },
                            "editor-gradient-presets": {
                                "description": "Custom gradient presets if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "array"
                                ],
                                "default": false,
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string"
                                        },
                                        "gradient": {
                                            "type": "string"
                                        },
                                        "slug": {
                                            "type": "string"
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            },
                            "editor-spacing-sizes": {
                                "description": "Custom spacing sizes if defined by the theme.",
                                "type": [
                                    "boolean",
                                    "array"
                                ],
                                "default": false,
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": "string"
                                        },
                                        "size": {
                                            "type": "string"
                                        },
                                        "slug": {
                                            "type": "string"
                                        }
                                    },
                                    "additionalProperties": false
                                }
                            },
                            "editor-styles": {
                                "description": "Whether theme opts in to the editor styles CSS wrapper.",
                                "type": "boolean",
                                "default": false
                            },
                            "html5": {
                                "description": "Allows use of HTML5 markup for search forms, comment forms, comment lists, gallery, and caption.",
                                "type": [
                                    "boolean",
                                    "array"
                                ],
                                "default": false,
                                "items": {
                                    "type": "string",
                                    "enum": [
                                        "search-form",
                                        "comment-form",
                                        "comment-list",
                                        "gallery",
                                        "caption",
                                        "script",
                                        "style"
                                    ]
                                }
                            },
                            "formats": {
                                "description": "Post formats supported.",
                                "type": "array",
                                "default": [
                                    "standard"
                                ],
                                "items": {
                                    "type": "string",
                                    "enum": {
                                        "standard": "standard",
                                        "aside": "aside",
                                        "chat": "chat",
                                        "gallery": "gallery",
                                        "link": "link",
                                        "image": "image",
                                        "quote": "quote",
                                        "status": "status",
                                        "video": "video",
                                        "audio": "audio"
                                    }
                                }
                            },
                            "post-thumbnails": {
                                "description": "The post types that support thumbnails or true if all post types are supported.",
                                "type": [
                                    "boolean",
                                    "array"
                                ],
                                "default": false,
                                "items": {
                                    "type": "string"
                                }
                            },
                            "responsive-embeds": {
                                "description": "Whether the theme supports responsive embedded content.",
                                "type": "boolean",
                                "default": false
                            },
                            "title-tag": {
                                "description": "Whether the theme can manage the document title tag.",
                                "type": "boolean",
                                "default": false
                            },
                            "wp-block-styles": {
                                "description": "Whether theme opts in to default WordPress block styles for viewing.",
                                "type": "boolean",
                                "default": false
                            }
                        }
                    },
                    "theme_uri": {
                        "description": "The URI of the theme's webpage.",
                        "type": "object",
                        "readonly": true,
                        "properties": {
                            "raw": {
                                "description": "The URI of the theme's webpage, as found in the theme header.",
                                "type": "string",
                                "format": "uri"
                            },
                            "rendered": {
                                "description": "The URI of the theme's webpage, transformed for display.",
                                "type": "string",
                                "format": "uri"
                            }
                        }
                    },
                    "version": {
                        "description": "The theme's current version.",
                        "type": "string",
                        "readonly": true
                    },
                    "status": {
                        "description": "A named status for the theme.",
                        "type": "string",
                        "enum": [
                            "inactive",
                            "active"
                        ]
                    }
                }
            }
        }
        JSON;
    }
}

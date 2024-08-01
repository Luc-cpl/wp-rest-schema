<?php

namespace WpRestSchema\Schemas\Wp\V2;

class Settings
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
                "PATCH"
            ],
            "endpoints": [
                {
                    "methods": [
                        "GET"
                    ],
                    "args": []
                },
                {
                    "methods": [
                        "POST",
                        "PUT",
                        "PATCH"
                    ],
                    "args": {
                        "title": {
                            "title": "Title",
                            "description": "Site title.",
                            "type": "string",
                            "required": false
                        },
                        "description": {
                            "title": "Tagline",
                            "description": "Site tagline.",
                            "type": "string",
                            "required": false
                        },
                        "timezone": {
                            "title": "",
                            "description": "A city in the same timezone as you.",
                            "type": "string",
                            "required": false
                        },
                        "date_format": {
                            "title": "",
                            "description": "A date format for all date strings.",
                            "type": "string",
                            "required": false
                        },
                        "time_format": {
                            "title": "",
                            "description": "A time format for all time strings.",
                            "type": "string",
                            "required": false
                        },
                        "start_of_week": {
                            "title": "",
                            "description": "A day number of the week that the week should start on.",
                            "type": "integer",
                            "required": false
                        },
                        "language": {
                            "title": "",
                            "description": "WordPress locale code.",
                            "type": "string",
                            "required": false
                        },
                        "use_smilies": {
                            "title": "",
                            "description": "Convert emoticons like :-) and :-P to graphics on display.",
                            "type": "boolean",
                            "required": false
                        },
                        "default_category": {
                            "title": "",
                            "description": "Default post category.",
                            "type": "integer",
                            "required": false
                        },
                        "default_post_format": {
                            "title": "",
                            "description": "Default post format.",
                            "type": "string",
                            "required": false
                        },
                        "posts_per_page": {
                            "title": "Maximum posts per page",
                            "description": "Blog pages show at most.",
                            "type": "integer",
                            "required": false
                        },
                        "show_on_front": {
                            "title": "Show on front",
                            "description": "What to show on the front page",
                            "type": "string",
                            "required": false
                        },
                        "page_on_front": {
                            "title": "Page on front",
                            "description": "The ID of the page that should be displayed on the front page",
                            "type": "integer",
                            "required": false
                        },
                        "page_for_posts": {
                            "title": "",
                            "description": "The ID of the page that should display the latest posts",
                            "type": "integer",
                            "required": false
                        },
                        "default_ping_status": {
                            "title": "",
                            "description": "Allow link notifications from other blogs (pingbacks and trackbacks) on new articles.",
                            "type": "string",
                            "enum": [
                                "open",
                                "closed"
                            ],
                            "required": false
                        },
                        "default_comment_status": {
                            "title": "Allow comments on new posts",
                            "description": "Allow people to submit comments on new posts.",
                            "type": "string",
                            "enum": [
                                "open",
                                "closed"
                            ],
                            "required": false
                        },
                        "site_logo": {
                            "title": "Logo",
                            "description": "Site logo.",
                            "type": "integer",
                            "required": false
                        },
                        "site_icon": {
                            "title": "Icon",
                            "description": "Site icon.",
                            "type": "integer",
                            "required": false
                        }
                    }
                }
            ],
            "schema": {
                "$schema": "http:\/\/json-schema.org\/draft-04\/schema#",
                "title": "settings",
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string",
                        "title": "Title",
                        "description": "Site title.",
                        "default": null
                    },
                    "description": {
                        "type": "string",
                        "title": "Tagline",
                        "description": "Site tagline.",
                        "default": null
                    },
                    "timezone": {
                        "type": "string",
                        "title": "",
                        "description": "A city in the same timezone as you.",
                        "default": null
                    },
                    "date_format": {
                        "type": "string",
                        "title": "",
                        "description": "A date format for all date strings.",
                        "default": null
                    },
                    "time_format": {
                        "type": "string",
                        "title": "",
                        "description": "A time format for all time strings.",
                        "default": null
                    },
                    "start_of_week": {
                        "type": "integer",
                        "title": "",
                        "description": "A day number of the week that the week should start on.",
                        "default": null
                    },
                    "language": {
                        "type": "string",
                        "title": "",
                        "description": "WordPress locale code.",
                        "default": "en_US"
                    },
                    "use_smilies": {
                        "type": "boolean",
                        "title": "",
                        "description": "Convert emoticons like :-) and :-P to graphics on display.",
                        "default": true
                    },
                    "default_category": {
                        "type": "integer",
                        "title": "",
                        "description": "Default post category.",
                        "default": null
                    },
                    "default_post_format": {
                        "type": "string",
                        "title": "",
                        "description": "Default post format.",
                        "default": null
                    },
                    "posts_per_page": {
                        "type": "integer",
                        "title": "Maximum posts per page",
                        "description": "Blog pages show at most.",
                        "default": 10
                    },
                    "show_on_front": {
                        "type": "string",
                        "title": "Show on front",
                        "description": "What to show on the front page",
                        "default": null
                    },
                    "page_on_front": {
                        "type": "integer",
                        "title": "Page on front",
                        "description": "The ID of the page that should be displayed on the front page",
                        "default": null
                    },
                    "page_for_posts": {
                        "type": "integer",
                        "title": "",
                        "description": "The ID of the page that should display the latest posts",
                        "default": null
                    },
                    "default_ping_status": {
                        "type": "string",
                        "title": "",
                        "description": "Allow link notifications from other blogs (pingbacks and trackbacks) on new articles.",
                        "default": null,
                        "enum": [
                            "open",
                            "closed"
                        ]
                    },
                    "default_comment_status": {
                        "type": "string",
                        "title": "Allow comments on new posts",
                        "description": "Allow people to submit comments on new posts.",
                        "default": null,
                        "enum": [
                            "open",
                            "closed"
                        ]
                    },
                    "site_logo": {
                        "type": "integer",
                        "title": "Logo",
                        "description": "Site logo.",
                        "default": null
                    },
                    "site_icon": {
                        "type": "integer",
                        "title": "Icon",
                        "description": "Site icon.",
                        "default": null
                    }
                }
            },
            "_links": {
                "self": [
                    {
                        "href": "http:\/\/localhost\/wp-json\/wp\/v2\/settings"
                    }
                ]
            }
        }
        JSON;
    }
}

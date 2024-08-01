<?php

namespace WpRestSchema\Schemas;

class Routes
{
    public static function getRoutes()
    {
        return array (
  '/' => 
  array (
    'json' => 'schemas/json/index.json',
    'class' => 'WpRestSchema\\Schemas\\Index',
  ),
  '/batch/v1' => 
  array (
    'json' => 'schemas/json/batch/v1.json',
    'class' => 'WpRestSchema\\Schemas\\Batch\\V1',
  ),
  '/oembed/1.0' => 
  array (
    'json' => 'schemas/json/oembed/1.0.json',
    'class' => 'WpRestSchema\\Schemas\\Oembed\\1.0',
  ),
  '/oembed/1.0/embed' => 
  array (
    'json' => 'schemas/json/oembed/1.0/embed.json',
    'class' => 'WpRestSchema\\Schemas\\Oembed\\1.0\\Embed',
  ),
  '/oembed/1.0/proxy' => 
  array (
    'json' => 'schemas/json/oembed/1.0/proxy.json',
    'class' => 'WpRestSchema\\Schemas\\Oembed\\1.0\\Proxy',
  ),
  '/wp/v2' => 
  array (
    'json' => 'schemas/json/wp/v2.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2',
  ),
  '/wp/v2/posts' => 
  array (
    'json' => 'schemas/json/wp/v2/posts.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Posts',
  ),
  '/wp/v2/posts/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/posts/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Posts\\Value',
  ),
  '/wp/v2/posts/(?P<parent>[\\d]+)/revisions' => 
  array (
    'json' => 'schemas/json/wp/v2/posts/value/revisions.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Posts\\Value\\Revisions',
  ),
  '/wp/v2/posts/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/posts/value/revisions/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Posts\\Value\\Revisions\\Value',
  ),
  '/wp/v2/posts/(?P<id>[\\d]+)/autosaves' => 
  array (
    'json' => 'schemas/json/wp/v2/posts/value/autosaves.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Posts\\Value\\Autosaves',
  ),
  '/wp/v2/posts/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/posts/value/autosaves/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Posts\\Value\\Autosaves\\Value',
  ),
  '/wp/v2/pages' => 
  array (
    'json' => 'schemas/json/wp/v2/pages.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Pages',
  ),
  '/wp/v2/pages/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/pages/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Pages\\Value',
  ),
  '/wp/v2/pages/(?P<parent>[\\d]+)/revisions' => 
  array (
    'json' => 'schemas/json/wp/v2/pages/value/revisions.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Pages\\Value\\Revisions',
  ),
  '/wp/v2/pages/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/pages/value/revisions/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Pages\\Value\\Revisions\\Value',
  ),
  '/wp/v2/pages/(?P<id>[\\d]+)/autosaves' => 
  array (
    'json' => 'schemas/json/wp/v2/pages/value/autosaves.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Pages\\Value\\Autosaves',
  ),
  '/wp/v2/pages/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/pages/value/autosaves/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Pages\\Value\\Autosaves\\Value',
  ),
  '/wp/v2/media' => 
  array (
    'json' => 'schemas/json/wp/v2/media.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Media',
  ),
  '/wp/v2/media/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/media/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Media\\Value',
  ),
  '/wp/v2/media/(?P<id>[\\d]+)/post-process' => 
  array (
    'json' => 'schemas/json/wp/v2/media/value/post-process.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Media\\Value\\PostProcess',
  ),
  '/wp/v2/media/(?P<id>[\\d]+)/edit' => 
  array (
    'json' => 'schemas/json/wp/v2/media/value/edit.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Media\\Value\\Edit',
  ),
  '/wp/v2/menu-items' => 
  array (
    'json' => 'schemas/json/wp/v2/menu-items.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\MenuItems',
  ),
  '/wp/v2/menu-items/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/menu-items/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\MenuItems\\Value',
  ),
  '/wp/v2/menu-items/(?P<id>[\\d]+)/autosaves' => 
  array (
    'json' => 'schemas/json/wp/v2/menu-items/value/autosaves.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\MenuItems\\Value\\Autosaves',
  ),
  '/wp/v2/menu-items/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/menu-items/value/autosaves/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\MenuItems\\Value\\Autosaves\\Value',
  ),
  '/wp/v2/blocks' => 
  array (
    'json' => 'schemas/json/wp/v2/blocks.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Blocks',
  ),
  '/wp/v2/blocks/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/blocks/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Blocks\\Value',
  ),
  '/wp/v2/blocks/(?P<parent>[\\d]+)/revisions' => 
  array (
    'json' => 'schemas/json/wp/v2/blocks/value/revisions.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Blocks\\Value\\Revisions',
  ),
  '/wp/v2/blocks/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/blocks/value/revisions/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Blocks\\Value\\Revisions\\Value',
  ),
  '/wp/v2/blocks/(?P<id>[\\d]+)/autosaves' => 
  array (
    'json' => 'schemas/json/wp/v2/blocks/value/autosaves.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Blocks\\Value\\Autosaves',
  ),
  '/wp/v2/blocks/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/blocks/value/autosaves/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Blocks\\Value\\Autosaves\\Value',
  ),
  '/wp/v2/templates' => 
  array (
    'json' => 'schemas/json/wp/v2/templates.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Templates',
  ),
  '/wp/v2/templates/lookup' => 
  array (
    'json' => 'schemas/json/wp/v2/templates/lookup.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Templates\\Lookup',
  ),
  '/wp/v2/template-parts' => 
  array (
    'json' => 'schemas/json/wp/v2/template-parts.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\TemplateParts',
  ),
  '/wp/v2/template-parts/lookup' => 
  array (
    'json' => 'schemas/json/wp/v2/template-parts/lookup.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\TemplateParts\\Lookup',
  ),
  '/wp/v2/global-styles/(?P<parent>[\\d]+)/revisions' => 
  array (
    'json' => 'schemas/json/wp/v2/global-styles/value/revisions.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\GlobalStyles\\Value\\Revisions',
  ),
  '/wp/v2/global-styles/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/global-styles/value/revisions/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\GlobalStyles\\Value\\Revisions\\Value',
  ),
  '/wp/v2/global-styles/themes/(?P<stylesheet>[\\/\\s%\\w\\.\\(\\)\\[\\]\\@_\\-]+)/variations' => 
  array (
    'json' => 'schemas/json/wp/v2/global-styles/themes/value/variations.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\GlobalStyles\\Themes\\Value\\Variations',
  ),
  '/wp/v2/global-styles/themes/(?P<stylesheet>[^\\/:<>\\*\\?"\\|]+(?:\\/[^\\/:<>\\*\\?"\\|]+)?)' => 
  array (
    'json' => 'schemas/json/wp/v2/global-styles/themes/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\GlobalStyles\\Themes\\Value',
  ),
  '/wp/v2/global-styles/(?P<id>[\\/\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/global-styles/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\GlobalStyles\\Value',
  ),
  '/wp/v2/navigation' => 
  array (
    'json' => 'schemas/json/wp/v2/navigation.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Navigation',
  ),
  '/wp/v2/navigation/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/navigation/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Navigation\\Value',
  ),
  '/wp/v2/navigation/(?P<parent>[\\d]+)/revisions' => 
  array (
    'json' => 'schemas/json/wp/v2/navigation/value/revisions.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Navigation\\Value\\Revisions',
  ),
  '/wp/v2/navigation/(?P<parent>[\\d]+)/revisions/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/navigation/value/revisions/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Navigation\\Value\\Revisions\\Value',
  ),
  '/wp/v2/navigation/(?P<id>[\\d]+)/autosaves' => 
  array (
    'json' => 'schemas/json/wp/v2/navigation/value/autosaves.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Navigation\\Value\\Autosaves',
  ),
  '/wp/v2/navigation/(?P<parent>[\\d]+)/autosaves/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/navigation/value/autosaves/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Navigation\\Value\\Autosaves\\Value',
  ),
  '/wp/v2/font-families' => 
  array (
    'json' => 'schemas/json/wp/v2/font-families.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\FontFamilies',
  ),
  '/wp/v2/font-families/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/font-families/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\FontFamilies\\Value',
  ),
  '/wp/v2/font-families/(?P<font_family_id>[\\d]+)/font-faces' => 
  array (
    'json' => 'schemas/json/wp/v2/font-families/value/font-faces.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\FontFamilies\\Value\\FontFaces',
  ),
  '/wp/v2/font-families/(?P<font_family_id>[\\d]+)/font-faces/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/font-families/value/font-faces/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\FontFamilies\\Value\\FontFaces\\Value',
  ),
  '/wp/v2/types' => 
  array (
    'json' => 'schemas/json/wp/v2/types.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Types',
  ),
  '/wp/v2/types/(?P<type>[\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/types/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Types\\Value',
  ),
  '/wp/v2/statuses' => 
  array (
    'json' => 'schemas/json/wp/v2/statuses.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Statuses',
  ),
  '/wp/v2/statuses/(?P<status>[\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/statuses/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Statuses\\Value',
  ),
  '/wp/v2/taxonomies' => 
  array (
    'json' => 'schemas/json/wp/v2/taxonomies.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Taxonomies',
  ),
  '/wp/v2/taxonomies/(?P<taxonomy>[\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/taxonomies/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Taxonomies\\Value',
  ),
  '/wp/v2/categories' => 
  array (
    'json' => 'schemas/json/wp/v2/categories.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Categories',
  ),
  '/wp/v2/categories/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/categories/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Categories\\Value',
  ),
  '/wp/v2/tags' => 
  array (
    'json' => 'schemas/json/wp/v2/tags.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Tags',
  ),
  '/wp/v2/tags/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/tags/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Tags\\Value',
  ),
  '/wp/v2/menus' => 
  array (
    'json' => 'schemas/json/wp/v2/menus.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Menus',
  ),
  '/wp/v2/menus/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/menus/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Menus\\Value',
  ),
  '/wp/v2/wp_pattern_category' => 
  array (
    'json' => 'schemas/json/wp/v2/wp_pattern_category.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\WpPatternCategory',
  ),
  '/wp/v2/wp_pattern_category/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/wp_pattern_category/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\WpPatternCategory\\Value',
  ),
  '/wp/v2/users' => 
  array (
    'json' => 'schemas/json/wp/v2/users.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Users',
  ),
  '/wp/v2/users/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/users/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Users\\Value',
  ),
  '/wp/v2/users/me' => 
  array (
    'json' => 'schemas/json/wp/v2/users/me.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Users\\Me',
  ),
  '/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords' => 
  array (
    'json' => 'schemas/json/wp/v2/users/value/application-passwords.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Users\\Value\\ApplicationPasswords',
  ),
  '/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords/introspect' => 
  array (
    'json' => 'schemas/json/wp/v2/users/value/application-passwords/introspect.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Users\\Value\\ApplicationPasswords\\Introspect',
  ),
  '/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords/(?P<uuid>[\\w\\-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/users/value/application-passwords/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Users\\Value\\ApplicationPasswords\\Value',
  ),
  '/wp/v2/comments' => 
  array (
    'json' => 'schemas/json/wp/v2/comments.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Comments',
  ),
  '/wp/v2/comments/(?P<id>[\\d]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/comments/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Comments\\Value',
  ),
  '/wp/v2/search' => 
  array (
    'json' => 'schemas/json/wp/v2/search.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Search',
  ),
  '/wp/v2/block-types' => 
  array (
    'json' => 'schemas/json/wp/v2/block-types.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\BlockTypes',
  ),
  '/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/block-types/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\BlockTypes\\Value',
  ),
  '/wp/v2/block-types/(?P<namespace>[a-zA-Z0-9_-]+)/(?P<name>[a-zA-Z0-9_-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/block-types/value/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\BlockTypes\\Value\\Value',
  ),
  '/wp/v2/settings' => 
  array (
    'json' => 'schemas/json/wp/v2/settings.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Settings',
  ),
  '/wp/v2/themes' => 
  array (
    'json' => 'schemas/json/wp/v2/themes.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Themes',
  ),
  '/wp/v2/themes/(?P<stylesheet>[^\\/:<>\\*\\?"\\|]+(?:\\/[^\\/:<>\\*\\?"\\|]+)?)' => 
  array (
    'json' => 'schemas/json/wp/v2/themes/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Themes\\Value',
  ),
  '/wp/v2/plugins' => 
  array (
    'json' => 'schemas/json/wp/v2/plugins.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Plugins',
  ),
  '/wp/v2/plugins/(?P<plugin>[^.\\/]+(?:\\/[^.\\/]+)?)' => 
  array (
    'json' => 'schemas/json/wp/v2/plugins/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Plugins\\Value',
  ),
  '/wp/v2/sidebars' => 
  array (
    'json' => 'schemas/json/wp/v2/sidebars.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Sidebars',
  ),
  '/wp/v2/sidebars/(?P<id>[\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/sidebars/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Sidebars\\Value',
  ),
  '/wp/v2/widget-types' => 
  array (
    'json' => 'schemas/json/wp/v2/widget-types.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\WidgetTypes',
  ),
  '/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/widget-types/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\WidgetTypes\\Value',
  ),
  '/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)/encode' => 
  array (
    'json' => 'schemas/json/wp/v2/widget-types/value/encode.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\WidgetTypes\\Value\\Encode',
  ),
  '/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)/render' => 
  array (
    'json' => 'schemas/json/wp/v2/widget-types/value/render.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\WidgetTypes\\Value\\Render',
  ),
  '/wp/v2/widgets' => 
  array (
    'json' => 'schemas/json/wp/v2/widgets.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Widgets',
  ),
  '/wp/v2/widgets/(?P<id>[\\w\\-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/widgets/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\Widgets\\Value',
  ),
  '/wp/v2/block-directory/search' => 
  array (
    'json' => 'schemas/json/wp/v2/block-directory/search.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\BlockDirectory\\Search',
  ),
  '/wp/v2/pattern-directory/patterns' => 
  array (
    'json' => 'schemas/json/wp/v2/pattern-directory/patterns.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\PatternDirectory\\Patterns',
  ),
  '/wp/v2/block-patterns/patterns' => 
  array (
    'json' => 'schemas/json/wp/v2/block-patterns/patterns.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\BlockPatterns\\Patterns',
  ),
  '/wp/v2/block-patterns/categories' => 
  array (
    'json' => 'schemas/json/wp/v2/block-patterns/categories.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\BlockPatterns\\Categories',
  ),
  '/wp-site-health/v1' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1',
  ),
  '/wp-site-health/v1/tests/background-updates' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/tests/background-updates.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\Tests\\BackgroundUpdates',
  ),
  '/wp-site-health/v1/tests/loopback-requests' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/tests/loopback-requests.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\Tests\\LoopbackRequests',
  ),
  '/wp-site-health/v1/tests/https-status' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/tests/https-status.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\Tests\\HttpsStatus',
  ),
  '/wp-site-health/v1/tests/dotorg-communication' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/tests/dotorg-communication.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\Tests\\DotorgCommunication',
  ),
  '/wp-site-health/v1/tests/authorization-header' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/tests/authorization-header.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\Tests\\AuthorizationHeader',
  ),
  '/wp-site-health/v1/directory-sizes' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/directory-sizes.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\DirectorySizes',
  ),
  '/wp-site-health/v1/tests/page-cache' => 
  array (
    'json' => 'schemas/json/wp-site-health/v1/tests/page-cache.json',
    'class' => 'WpRestSchema\\Schemas\\WpSiteHealth\\V1\\Tests\\PageCache',
  ),
  '/wp-block-editor/v1' => 
  array (
    'json' => 'schemas/json/wp-block-editor/v1.json',
    'class' => 'WpRestSchema\\Schemas\\WpBlockEditor\\V1',
  ),
  '/wp-block-editor/v1/url-details' => 
  array (
    'json' => 'schemas/json/wp-block-editor/v1/url-details.json',
    'class' => 'WpRestSchema\\Schemas\\WpBlockEditor\\V1\\UrlDetails',
  ),
  '/wp/v2/menu-locations' => 
  array (
    'json' => 'schemas/json/wp/v2/menu-locations.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\MenuLocations',
  ),
  '/wp/v2/menu-locations/(?P<location>[\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/menu-locations/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\MenuLocations\\Value',
  ),
  '/wp-block-editor/v1/export' => 
  array (
    'json' => 'schemas/json/wp-block-editor/v1/export.json',
    'class' => 'WpRestSchema\\Schemas\\WpBlockEditor\\V1\\Export',
  ),
  '/wp-block-editor/v1/navigation-fallback' => 
  array (
    'json' => 'schemas/json/wp-block-editor/v1/navigation-fallback.json',
    'class' => 'WpRestSchema\\Schemas\\WpBlockEditor\\V1\\NavigationFallback',
  ),
  '/wp/v2/font-collections' => 
  array (
    'json' => 'schemas/json/wp/v2/font-collections.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\FontCollections',
  ),
  '/wp/v2/font-collections/(?P<slug>[\\/\\w-]+)' => 
  array (
    'json' => 'schemas/json/wp/v2/font-collections/value.json',
    'class' => 'WpRestSchema\\Schemas\\Wp\\V2\\FontCollections\\Value',
  ),
);
    }
}

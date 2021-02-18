<?php
# Global const
const NATALLY_VERSION = '2.5';
const NATALLY_PAGE_STORIES = 0;
const NATALLY_PAGE_POEMS = 343;
const NATALLY_PAGE_JOURNALS = 588;
const NATALLY_PAGE_PRIVACY_POLICY = 149;
const NATALLY_PAGE_404 = 657;
# Load utils files
$NATALLY_UTILS_PARTS = [
  'utils/File',
  'utils/FilesHashes',
  'utils/FileQueue',
  'utils/FileQueueStyles',
  'utils/FileQueueScripts',
];
foreach ($NATALLY_UTILS_PARTS as $i) {
  get_template_part($i);
}
# Initialize utils
$NATALLY_UTILS = [
  'QUEUE_STYLES' => new NatallyFileQueueStyles(),
  'QUEUE_SCRIPTS' => new NatallyFileQueueScripts(),
];
# Push global styles
$NATALLY_UTILS['QUEUE_STYLES']->push('styles-variables', 'styles/variables.css');
$NATALLY_UTILS['QUEUE_STYLES']->push('styles-fonts', 'styles/fonts.css');
$NATALLY_UTILS['QUEUE_STYLES']->push('styles-schemas', 'styles/schemas.css');
$NATALLY_UTILS['QUEUE_STYLES']->push('styles-layout', 'styles/layout.css');
$NATALLY_UTILS['QUEUE_STYLES']->push('styles-body', 'styles/body.css');
# Push global scripts
$NATALLY_UTILS['QUEUE_SCRIPTS']->push('background-image-lazy-loading', 'js/background-image-lazy-loading.js');
$NATALLY_UTILS['QUEUE_SCRIPTS']->push('drawer', 'js/drawer.js');
$NATALLY_UTILS['QUEUE_SCRIPTS']->push('poem-more-info', 'js/poem-more-info.js');
# Content Width set
$content_width ??= 650;
# Delete: WP Emoji Scripts / CSS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
# Delete: Gutenberg CSS
add_action('wp_print_styles', fn () => wp_dequeue_style('wp-block-library'), 100);
# Delete: WP Link REST API
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
add_filter('rest_jsonp_enabled', '__return_false');
# Delete: WP oEmbed Scripts
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('embed_oembed_discover', '__return_false');
# Delete: Link / EditURI
remove_action('wp_head', 'rsd_link');
# Delete: Link / wlw Manifest
remove_action('wp_head', 'wlwmanifest_link');
# Delete: Meta generator WordPress tag
remove_action('wp_head', 'wp_generator');
# Delete: DNS-Prefetech
remove_action('wp_head', 'wp_resource_hints', 2);
# Delete: Shortlink from <head>
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
# Delete: Shortlink from HTTP Header
remove_action('template_redirect', 'wp_shortlink_header', 11);
# Register Menus
register_nav_menu('header-menu', 'Header Menu');
register_nav_menu('footer-menu', 'Footer Menu');
# Initialize components & blocks
$NATALLY_TEMPLATE_PARTS = [
  'components/button/button',
  'components/content/content',
  'components/drawer/drawer',
  'components/drawer-button/drawer-button',
  'components/icon/icon',
  'components/link-adjacent-post/link-adjacent-post',
  'components/link-journal/link-journal',
  'components/link-poem/link-poem',
  'components/link-story/link-story',
  'components/list-journal/list-journal',
  'components/list-poem/list-poem',
  'components/list-story/list-story',
  'components/logo/logo',
  'components/menu/menu',
  'components/meta/meta',
  'components/section/section',
  'components/social-media/social-media',
  'components/text/text',
  'components/title/title',
  'blocks/audiobook/audiobook',
  'blocks/cookie-bar/cookie-bar',
  'blocks/did-you-like/did-you-like',
  'blocks/drawer-settings/drawer-settings',
  'blocks/drawer-sidebar/drawer-sidebar',
  'blocks/error-404-content/error-404-content',
  'blocks/error-404-meta/error-404-meta',
  'blocks/footer/footer',
  'blocks/frontpage-content/frontpage-content',
  'blocks/header/header',
  'blocks/journal-adjacent-posts/journal-adjacent-posts',
  'blocks/journal-content/journal-content',
  'blocks/journal-list-full/journal-list-full',
  'blocks/journal-list-suggestions/journal-list-suggestions',
  'blocks/journal-meta/journal-meta',
  'blocks/page-content/page-content',
  'blocks/page-meta/page-meta',
  'blocks/poem-adjacent-posts/poem-adjacent-posts',
  'blocks/poem-content/poem-content',
  'blocks/poem-first-time/poem-first-time',
  'blocks/poem-list-full/poem-list-full',
  'blocks/poem-list-suggestions/poem-list-suggestions',
  'blocks/poem-meta/poem-meta',
  'blocks/poem-thumbnail/poem-thumbnail',
  'blocks/progress-bar/progress-bar',
  'blocks/puffer-fish-animation/puffer-fish-animation',
  'blocks/story-adjacent-posts/story-adjacent-posts',
  'blocks/story-content/story-content',
  'blocks/story-list-full/story-list-full',
  'blocks/story-list-suggestions/story-list-suggestions',
  'blocks/story-meta/story-meta',
  'blocks/story-thumbnail/story-thumbnail',
];
foreach ($NATALLY_TEMPLATE_PARTS as $i) {
  get_template_part($i, null, $NATALLY_UTILS);
}
# Enqueue styles & scripts
add_action('wp_enqueue_scripts', fn() => $NATALLY_UTILS['QUEUE_STYLES']->enqueue());
add_action('wp_enqueue_scripts', fn() => $NATALLY_UTILS['QUEUE_SCRIPTS']->enqueue());
# Add theme support for post-thumbnails
add_theme_support('post-thumbnails');
# Image size settings
add_image_size('post-thumbnail-desktop-2x', 1800, null, true);
add_image_size('post-thumbnail-desktop-1x', 900, null, true);
remove_image_size('1536x1536');
remove_image_size('2048x2048');
add_filter('intermediate_image_sizes', fn($sizes) => array_diff($sizes, ['medium_large']));
# Add title tag support
add_theme_support('title-tag');
# Deactive Search
add_action('parse_query', function ($query) {
  if (is_search()) {
    $query->is_search = false;
    $query->is_404 = true;
  }
});
add_filter('get_search_form', '__return_false');
# Deactive Comments Feeds
function disable_comments_feeds() {
  if (is_single() || is_page()) {
    wp_redirect(get_permalink(), 301);
    die();
  }
}
add_action('do_feed', 'disable_comments_feeds', -1);
add_action('do_feed_rdf', 'disable_comments_feeds', -1);
add_action('do_feed_rss', 'disable_comments_feeds', -1);
add_action('do_feed_rss2', 'disable_comments_feeds', -1);
add_action('do_feed_atom', 'disable_comments_feeds', -1);
add_action('do_feed_rss2_comments', 'disable_comments_feeds', -1);
add_action('do_feed_atom_comments', 'disable_comments_feeds', -1);
add_action('feed_links_show_comments_feed', '__return_false', -1);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
# Restrict REST API only for authenticated users
add_filter('rest_authentication_errors', function($result) {
  if (!empty($result)) {
    return $result;
  }
  if (!is_user_logged_in()) {
    return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', ['status' => 401]);
  }
  return $result;
});
# Deactive XMLRPC
add_filter('xmlrpc_enabled', '__return_false');
# Remove SearchAction from Yoast SEO JSON
add_filter('disable_wpseo_json_ld_search', '__return_true');

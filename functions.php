<?php
# Global const
const NATALLY_VERSION = '2.4';
# Global variables
$NATALLY_STYLES = [
  ['styles-variables', 'styles/variables.css'],
  ['styles-schemas', 'styles/schemas.css'],
  ['styles-layout', 'styles/layout.css'],
  ['styles-body', 'styles/body.css'],
];
$NATALLY_SCRIPTS = [
  ['background-image-lazy-loading', 'js/background-image-lazy-loading.js', true],
  ['drawer', 'js/drawer.js', true],
  ['poem-more-info', 'js/poem-more-info.js', true],
];
$NATALLY_FILES_HASHES_PATH = get_template_directory().'/file-hashes.json';
$NATALLY_FILES_HASHES = json_decode(file_get_contents($NATALLY_FILES_HASHES_PATH), true);
# Styles Push Function
function natally_push_style(string $name, string $path) {
  global $NATALLY_STYLES;
  array_push($NATALLY_STYLES, [$name, $path]);
}
# Scripts Push Function
function natally_push_script(string $name, string $path, bool $defer = true) {
  global $NATALLY_SCRIPTS;
  array_push($NATALLY_SCRIPTS, [$name, $path, $defer]);
}
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
# Initialize Components
get_template_part('components/button/button');
get_template_part('components/content/content');
get_template_part('components/drawer/drawer');
get_template_part('components/drawer-button/drawer-button');
get_template_part('components/icon/icon');
get_template_part('components/link-journal/link-journal');
get_template_part('components/link-poem/link-poem');
get_template_part('components/link-story/link-story');
get_template_part('components/list-journal/list-journal');
get_template_part('components/list-poem/list-poem');
get_template_part('components/list-story/list-story');
get_template_part('components/logo/logo');
get_template_part('components/menu/menu');
get_template_part('components/meta/meta');
get_template_part('components/section/section');
get_template_part('components/social-media/social-media');
get_template_part('components/text/text');
get_template_part('components/title/title');
#Initialize Blocks
get_template_part('blocks/audiobook/audiobook');
get_template_part('blocks/cookie-bar/cookie-bar');
get_template_part('blocks/did-you-like/did-you-like');
get_template_part('blocks/drawer-settings/drawer-settings');
get_template_part('blocks/drawer-sidebar/drawer-sidebar');
get_template_part('blocks/error-404-content/error-404-content');
get_template_part('blocks/error-404-meta/error-404-meta');
get_template_part('blocks/footer/footer');
get_template_part('blocks/frontpage-content/frontpage-content');
get_template_part('blocks/header/header');
get_template_part('blocks/journal-content/journal-content');
get_template_part('blocks/journal-list-full/journal-list-full');
get_template_part('blocks/journal-list-suggestions/journal-list-suggestions');
get_template_part('blocks/journal-meta/journal-meta');
get_template_part('blocks/page-content/page-content');
get_template_part('blocks/page-meta/page-meta');
get_template_part('blocks/poem-content/poem-content');
get_template_part('blocks/poem-first-time/poem-first-time');
get_template_part('blocks/poem-list-full/poem-list-full');
get_template_part('blocks/poem-list-suggestions/poem-list-suggestions');
get_template_part('blocks/poem-meta/poem-meta');
get_template_part('blocks/poem-thumbnail/poem-thumbnail');
get_template_part('blocks/progress-bar/progress-bar');
get_template_part('blocks/puffer-fish-animation/puffer-fish-animation');
get_template_part('blocks/story-content/story-content');
get_template_part('blocks/story-list-full/story-list-full');
get_template_part('blocks/story-list-suggestions/story-list-suggestions');
get_template_part('blocks/story-meta/story-meta');
get_template_part('blocks/story-thumbnail/story-thumbnail');
# Enqueue CSS
add_action('wp_enqueue_scripts', function () {
  global $NATALLY_FILES_HASHES;
  global $NATALLY_STYLES;
  foreach ($NATALLY_STYLES as $style) {
    [$name, $path] = $style;
    $pathTheme = get_template_directory_uri().'/'.$path;
    $hash = $NATALLY_FILES_HASHES[$path] ?? time();
    wp_enqueue_style($name, $pathTheme, [], $hash, 'all');
  }
});
# Enqueue JS
add_action('wp_enqueue_scripts', function () {
  global $NATALLY_FILES_HASHES;
  global $NATALLY_SCRIPTS;
  foreach ($NATALLY_SCRIPTS as $script) {
    [$name, $path, $defer] = $script;
    $pathTheme = get_template_directory_uri().'/'.$path;
    $hash = $NATALLY_FILES_HASHES[$path] ?? time();
    wp_enqueue_script($name, $pathTheme, [], $hash, $defer);
  }
});
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
#Restrict REST API only for authenticated users
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
# Minify HTML
get_template_part('WP_HTML_Compression');
add_action('get_header', fn() => ob_start(fn($html) => new WP_HTML_Compression($html)));

<?php
if (!isset($content_width)) {
  $content_width = 900;
}
# Delete: WP Emoji Scripts / CSS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
# Delete: Gutenberg CSS
add_action('wp_print_styles', function () {
  wp_dequeue_style('wp-block-library');
}, 100);
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
/** Enqueue CSS */
add_action('wp_enqueue_scripts', function () {
  wp_register_style('standard-style', get_template_directory_uri() . '/style.min.css', array(), '2.1', 'all');
  wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,700|Source+Sans+Pro:600,700&subset=latin-ext&display=swap', array(), '2.1', 'all');
  wp_enqueue_style('standard-style');
  wp_enqueue_style('google-fonts');
});
/** Enqueue JS */
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('background-image-lazy-loading', get_template_directory_uri() . '/js/background-image-lazy-loading.js', array(), '1.0.0', true);
  wp_enqueue_script('drawer', get_template_directory_uri() . '/js/drawer.js', array(), '1.0.0', true);
  wp_enqueue_script('poem-more-info', get_template_directory_uri() . '/js/poem-more-info.js', array(), '1.0.0', true);
});
/** Register Menus */
register_nav_menu('header-menu', 'Header Menu');
register_nav_menu('footer-menu', 'Footer Menu');
/** Initialize Fragments */
get_template_part('fragments/button/button');
get_template_part('fragments/menu/menu');
get_template_part('fragments/plain-text/plain-text');
get_template_part('fragments/tile-poem/tile-poem');
get_template_part('fragments/tile-post/tile-post');
get_template_part('fragments/link-icons/link-icons');
get_template_part('fragments/title/title');
get_template_part('fragments/logo/logo');
/** Initialize Components */
get_template_part('components/list-poem/list-poem');
get_template_part('components/list-post/list-post');
get_template_part('components/section/section');
get_template_part('components/social-media/social-media');
get_template_part('components/drawer/drawer');
get_template_part('components/drawer-button/drawer-button');
/** Initialize Blocks */
get_template_part('blocks/cookie-bar/cookie-bar');
get_template_part('blocks/header/header');
get_template_part('blocks/progress-bar/progress-bar');
get_template_part('blocks/footer/footer');
get_template_part('blocks/content/content');
get_template_part('blocks/meta/meta');
get_template_part('blocks/cover-image/cover-image');
get_template_part('blocks/audiobook/audiobook');
get_template_part('blocks/404/404');
get_template_part('blocks/drawer-sidebar/drawer-sidebar');
get_template_part('blocks/drawer-settings/drawer-settings');
/** Remove Poems post from Home Query */
add_action('pre_get_posts', function ($query) {
  if ($query->is_main_query() && $query->is_home()) {
    $query->set('category__not_in', array(5));
  }
});
/** Add theme support for post-thumbnails */
add_theme_support('post-thumbnails');
/** Image size settings */
add_image_size('post-thumbnail-desktop-2x', 1800, null, true);
add_image_size('post-thumbnail-desktop-1x', 900, null, true);
remove_image_size('1536x1536');
remove_image_size('2048x2048');
add_filter('intermediate_image_sizes', function($sizes) {
  return array_diff($sizes, ['medium_large']);
});
/** Add title tag support */
add_theme_support('title-tag');
/** Deactive Search */
add_action('parse_query', function ($query) {
  if (is_search()) {
    $query->is_search = false;
    $query->is_404 = true;
  }
});
add_filter('get_search_form', '__return_false');
/** Deactive Comments Feeds */
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
/** Restrict REST API only for authenticated users */
add_filter('rest_authentication_errors', function($result) {
  if (!empty($result)) {
      return $result;
  }
  if (!is_user_logged_in()) {
      return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ));
  }
  return $result;
});
/** Deactive XMLRPC */
add_filter('xmlrpc_enabled', '__return_false');
/**
 * Load an inline SVG.
 * @param string $filename The filename of the SVG you want to load.
 * @return string The content of the SVG you want to load.
 */
function load_inline_svg($filename) {
  $svg_path = '/images/';

  return file_exists(get_template_directory().$svg_path.$filename)
    ? file_get_contents(get_template_directory().$svg_path.$filename)
    : '';
}
/** Remove SearchAction from Yoast SEO JSON */
add_filter('disable_wpseo_json_ld_search', '__return_true');
/** Minify HTML */
get_template_part('WP_HTML_Compression');
add_action('get_header', function() {
  ob_start(function($html) { return new WP_HTML_Compression($html); });
});
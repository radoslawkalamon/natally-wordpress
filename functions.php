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
  wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,700|Source+Sans+Pro:600,700&subset=latin-ext', array(), '1.0', 'all');
  wp_register_style('standard-style', get_template_directory_uri() . '/style.min.css', array(), '1.4', 'all');
  wp_enqueue_style('google-fonts');
  wp_enqueue_style('standard-style');
});
/** Enqueue JS */
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('background-image-lazy-loading', get_template_directory_uri() . '/js/background-image-lazy-loading.js', array(), '1.0.0', true);
});
/** Register Menus */
register_nav_menu('header-menu', 'Header Menu');
register_nav_menu('footer-menu', 'Footer Menu');
/** Initialize Fragments */
get_template_part('fragments/button');
get_template_part('fragments/list-link-icon');
get_template_part('fragments/menu');
get_template_part('fragments/tile-big');
get_template_part('fragments/tile-small');
get_template_part('fragments/title-section');
get_template_part('fragments/title-big');
get_template_part('fragments/title-small');
/** Remove Poems post from Home Query */
add_action('pre_get_posts', function ($query) {
  if ($query->is_main_query() && $query->is_home()) {
    $query->set('category__not_in', array(5));
  }
});
/** Add theme support for post-thumbnails */
add_theme_support('post-thumbnails');
add_image_size('large', 1000, '', true);
add_image_size('medium', 600, '', true);
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
add_action('do_feed',      'disable_comments_feeds', -1);
add_action('do_feed_rdf',  'disable_comments_feeds', -1);
add_action('do_feed_rss',  'disable_comments_feeds', -1);
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
  if (file_exists(get_template_directory() . $svg_path . $filename)) {
    return file_get_contents(get_template_directory().$svg_path.$filename);
    // return file_get_contents(get_template_directory().$svg_path.$filename, false, stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false))));
  }
  return '';
}

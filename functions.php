<?php
  if (!isset($content_width)) $content_width = 900;
  # Delete: WP Emoji Scripts / CSS
  remove_action('wp_head', 'print_emoji_detection_script', 7); 
  remove_action('admin_print_scripts', 'print_emoji_detection_script'); 
  remove_action('wp_print_styles', 'print_emoji_styles'); 
  remove_action('admin_print_styles', 'print_emoji_styles');
  # Delete: Gutenberg CSS
  function delete_gutenberg_css() {
    wp_dequeue_style('wp-block-library');
  }
  add_action('wp_print_styles', 'delete_gutenberg_css', 100);
  # Delete: WP Link REST API
  remove_action('wp_head', 'rest_output_link_wp_head', 10);
  remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
  remove_action('template_redirect', 'rest_output_link_header', 11, 0);
  add_filter('rest_enabled', '__return_false');
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
  # Delete: Comment from <head>
  remove_action('wp_head', 'feed_links', 2);
  # Delete: Category feed from <head>
  remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
  /** Enqueue CSS */
  function add_style_css() {
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:400,700|Source+Sans+Pro:600,700&subset=latin-ext', array(), '1.0', 'all');
    wp_register_style('standard-style', get_template_directory_uri() . '/style.min.css', array(), '1.3', 'all');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('standard-style');
  }
  add_action('wp_enqueue_scripts', 'add_style_css');
  /** Register Menus */
  register_nav_menu('header-menu', 'Header Menu');
  register_nav_menu('footer-menu', 'Footer Menu');
  /** Initialize Fragments */
  get_template_part('fragments/button-get-more');
  get_template_part('fragments/list-link-icon');
  get_template_part('fragments/menu');
  get_template_part('fragments/tile-big');
  get_template_part('fragments/tile-small');
  get_template_part('fragments/title-section');
  get_template_part('fragments/title-big');
  get_template_part('fragments/title-small');
  /** Remove Poems post from Home Query */
  function remove_poem_from_home_page($query) {
    if($query->is_main_query() && $query->is_home()) {
        $query->set('category__not_in', array(5));
    }
  }
  add_action('pre_get_posts', 'remove_poem_from_home_page');
  /** Add theme support for post-thumbnails */
  add_theme_support('post-thumbnails');
  add_image_size('large', 1000, '', true);
  add_image_size('medium', 600, '', true);
  /** Add title tag support */
  add_theme_support('title-tag');
 
  /**
  * Load an inline SVG.
  * @param string $filename The filename of the SVG you want to load.
  * @return string The content of the SVG you want to load.
  */
  function load_inline_svg($filename) {
    $svg_path = '/images/';
    if (file_exists(get_template_directory().$svg_path.$filename)) {
      return file_get_contents(get_template_directory_uri().$svg_path.$filename);
      // return file_get_contents(get_template_directory_uri().$svg_path.$filename, false, stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false))));
    }
    return '';
  }
?>

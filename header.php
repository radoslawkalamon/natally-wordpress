<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <!-- Favicon Settings -->
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri(); ?>/images/icons/icon-192x192.png">
    <link rel="shortcut icon" sizes="192x192" href="<?= get_template_directory_uri(); ?>/images/icons/icon-192x192.png">
    <!-- iOS Settings -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/images/icons/icon-192x192-white.png">
    <!-- Blink Settings -->
    <meta name="theme-color" content="#E2000E">
    <!-- Podcasts RSS Feed -->
    <link type="application/rss+xml" rel="alternate" title="169cm.pl :: Kanał podcastu" href="http://feeds.soundcloud.com/users/soundcloud:users:618891150/sounds.rss"/>
    <!-- Posts RSS Feed -->
    <link type="application/rss+xml" rel="alternate" title="169cm.pl :: Kanał postów" href="<?= bloginfo('rss2_url'); ?>" />
    <!-- Head -->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <script src="<?= get_template_directory_uri(); ?>/blocks/drawer-settings/drawer-settings-body-attachment.js?ver=<?= NATALLY_VERSION ?>"></script>
    <div class='body-wrapper'>
      <?php Block_Header(); ?>
      <?php Block_DrawerSidebar(); ?>
      <?php Block_DrawerSettings(); 

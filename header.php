<?php get_template_part('components/the-header'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-57058519-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-57058519-3');
    </script> -->
    <meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php $urlFavicon = get_template_directory_uri()."/images/icons/"; ?>
    <!-- MS Tile Settings -->
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-square70x70logo" content="<?php echo $urlFavicon; ?>icon-192x192.png">
    <meta name="msapplication-square150x150logo" content="<?php echo $urlFavicon; ?>icon-192x192.png">
    <meta name="msapplication-wide310x150logo" content="<?php echo $urlFavicon; ?>icon-310x150.png">
    <!-- Favicon Settings -->
    <link rel="icon" type="image/png" href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="48x48" />
    <link rel="icon" type="image/png" href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="144x144" />
    <link rel="icon" type="image/png" href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="192x192" />
    <!-- iOS Settings -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="152x152" rel="apple-touch-icon-precomposed">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="144x144" rel="apple-touch-icon-precomposed">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="120x120" rel="apple-touch-icon-precomposed">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="114x114" rel="apple-touch-icon-precomposed">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="76x76" rel="apple-touch-icon-precomposed">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="72x72" rel="apple-touch-icon-precomposed">
    <link href="<?php echo $urlFavicon; ?>icon-192x192.png" sizes="57x57" rel="apple-touch-icon-precomposed">
    <!-- Blink Settings -->
    <meta name="theme-color" content="#E2000E">
    <!-- Google Podcasts Settings -->
    <link type="application/rss+xml" rel="alternate" title="169cm.pl" href="http://feeds.soundcloud.com/users/soundcloud:users:618891150/sounds.rss"/>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php Component_TheHeader(); ?>
    <main class='body-wrapper'>

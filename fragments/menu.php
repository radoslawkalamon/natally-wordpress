<?php function Fragment_Menu(
  string $themeLocation = '',
  string $className = ''
) {
  $classNames = implode(' ', [
    'menu',
    $className !== '' ? 'menu--'.$className : '',
  ]);
	wp_nav_menu([
    'theme_location'  => $themeLocation,
    'menu'            => '',
    'container'       => false,
    'menu_class'      => '',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="'.$classNames.'">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  ]);
} ?>

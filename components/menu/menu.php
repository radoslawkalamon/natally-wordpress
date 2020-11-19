<?php function Component_Menu(
  array $styleClasses = [],
  string $themeLocation = ''
) {
  $classNames = [
    'menu',
    ...array_map(fn($element) => 'menu--'.$element, $styleClasses),
  ];

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
    'items_wrap'      => '<ul class="'.implode(' ', $classNames).'">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
  ]);
}
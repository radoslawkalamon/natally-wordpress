<?php function Component_DrawerButton(
  array $styleClasses = [],
  string $location,
  string $icon
) { 
  $classNames = [
    'drawer-button',
    ...array_map(fn($element) => 'drawer-button--'.$element, $styleClasses),
  ];
  ?>

  <button
    class='<?= implode(' ', $classNames); ?>'
    data-drawer-button='<?= $location; ?>'
  >
    <?= load_inline_svg($icon); ?>
  </button>

<?php }
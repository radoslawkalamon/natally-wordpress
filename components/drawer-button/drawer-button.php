<?php function Component_DrawerButton(
  array $styleClasses = [],
  string $location,
  string $icon,
  string $ariaLabel
) { 
  $classNames = [
    'drawer-button',
    ...array_map(fn($element) => 'drawer-button--'.$element, $styleClasses),
  ];
  ?>

  <button
    class='<?= implode(' ', $classNames); ?>'
    data-drawer-button='<?= $location; ?>'
    aria-label='<?= $location; ?>'
  >
    <?= Component_Icon($icon); ?>
  </button>

<?php }

natally_push_style('components-drawer-button', 'components/drawer-button/drawer-button.css');
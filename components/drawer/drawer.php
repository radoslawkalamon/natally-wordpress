<?php function Component_Drawer(
  array $styleClasses = [],
  string $location,
  callable $content,
  array $contentArgs = []
) { 
  $classNames = [
    'drawer',
    ...array_map(fn($element) => 'drawer--'.$element, $styleClasses),
  ];
  ?>

  <div
    class='<?= implode(' ', $classNames); ?>'
    data-drawer='<?= $location; ?>'
  >
    <?php call_user_func($content, ...$contentArgs); ?>
  </div>

<?php }

$args['QUEUE_STYLES']->push('components-drawer', 'components/drawer/drawer.css');

<?php function Component_Text(
  array $styleClasses = [],
  string $text
) { 
  $classNames = [
    'text',
    ...array_map(fn($element) => 'text--'.$element, $styleClasses),
  ];
  ?>

  <p class='<?= implode(' ', $classNames); ?>'><?= $text; ?></p>
<?php }

$args['QUEUE_STYLES']->push('components-text', 'components/text/text.css');

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

natally_push_style('components-text', 'components/text/text.css');

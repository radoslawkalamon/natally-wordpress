<?php function Fragment_PlainText(
  array $styleClasses = [],
  string $text
) { 
  $classNames = [
    'plain-text',
    ...array_map(fn($element) => 'plain-text--'.$element, $styleClasses),
  ];
  ?>

  <p class='<?= implode(' ', $classNames); ?>'><?= $text; ?></p>
<?php }
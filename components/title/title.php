<?php function Component_Title(
  array $styleClasses = [],
  string $title,
  string $level = '1'
) { 
  $classNames = [
    'title',
    ...array_map(fn($element) => 'title--'.$element, $styleClasses),
  ];
  $tagName = 'h'.$level;
  ?>

  <<?= $tagName; ?> class='<?= implode(' ', $classNames); ?>'>
    <?= $title; ?>
  </<?= $tagName; ?>>

<?php }

natally_push_style('components-title', 'components/title/title.css');

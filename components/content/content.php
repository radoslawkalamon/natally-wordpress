<?php function Component_Content(
  array $styleClasses = [],
  string $content = '',
  bool $enableProgressBar = false
) {
  $classNames = [
    'content',
    ...array_map(fn($element) => 'content--'.$element, $styleClasses),
  ];
  ?>

  <div
    class='<?= implode(' ', $classNames); ?>'
    <?= $enableProgressBar ? 'data-content' : '' ?>
  >
    <?= $content; ?>
  </div>
<?php }
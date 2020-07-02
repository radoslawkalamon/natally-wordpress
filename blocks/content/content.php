<?php function Block_Content(
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
    <div class='content__inner'>
      <?= $content; ?>
    </div>
  </div>
<?php }
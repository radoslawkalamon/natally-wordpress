<?php function Component_Meta(
  array $styleClasses = [],
  string $title = '',
  string $subtitle = ''
) {
  $classNames = [
    'meta',
    ...array_map(fn($element) => 'meta--'.$element, $styleClasses),
  ];
  ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <div class='meta__title'>
      <?= Component_Title([], $title); ?>
    </div>
    <?php if ($subtitle !== '') : ?>
    <footer class='meta__subtitle'>
      <?= $subtitle; ?>
    </footer>
    <?php endif; ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('components-meta', 'components/meta/meta.css');

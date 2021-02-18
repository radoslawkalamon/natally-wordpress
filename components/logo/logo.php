<?php function Component_Logo(
  array $styleClasses = []
) { 
  $classNames = [
    'logo',
    ...array_map(fn($element) => 'logo--'.$element, $styleClasses),
  ];
  ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <a class='logo__link' href='<?= home_url(); ?>'>
      <?= Component_Icon('169cm_logo.svg'); ?>
    </a>
  </div>
<?php }

$args['QUEUE_STYLES']->push('components-logo', 'components/logo/logo.css');
<?php function Fragment_Logo(
  array $styleClasses = []
) { 
  $classNames = [
    'logo',
    ...array_map(fn($element) => 'logo--'.$element, $styleClasses),
  ];
  ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <a class='logo__link' href='<?= home_url(); ?>'>
      <?= load_inline_svg('169cm_logo.svg'); ?>
    </a>
  </div>
<?php }
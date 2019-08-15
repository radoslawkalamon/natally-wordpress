<?php function Fragment_TitleSection(
  string $title = '',
  string $className = ''
) {
  $classNames = implode(' ', [
    'title-section',
    $className !== '' ? 'title-section--'.$className : '',
  ]); ?>

  <h2 class='<?= $classNames ?>'>
    <?= $title ?>
  </h2>

<?php } ?>

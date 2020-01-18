<?php function Fragment_Text(
  string $text,
  string $className = ''
) {
  $classNames = implode(' ', [
    'text',
    $className !== '' ? 'text--'.$className : '',
  ]);
  ?>

  <p class='<?= $classNames; ?>'>
    <?= $text; ?>
  </p>

<?php } ?>

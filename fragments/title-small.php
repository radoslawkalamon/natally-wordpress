<?php function Fragment_TitleSmall(
  array $data = [],
  string $className = ''
) {
  $classNames = implode(' ', [
    'title-small',
    $className !== '' ? 'title-small--'.$className : '',
  ]); ?>

  <header class='<?= $classNames ?>'>
    <h1 class='title-small__title'>
      <?= $data['title'] ?>
    </h1>
    <hr class='title-small__line' />
    <?php if($data['dateMachine'] && $data['dateHuman']) : ?>
    <time
      class='title-small__date'
      datetime='<?= $data['dateMachine']; ?>'
    >
      <?= $data['dateHuman'] ?>
    </time>
    <?php endif; ?>
  </header>

<?php } ?>

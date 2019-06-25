<?php function Fragment_TitleSmall(
  array $data = [],
  string $className = ''
) {
  $classNames = implode(' ', [
    'title-small',
    $className !== '' ? 'title-small--'.$className : '',
  ]); ?>

  <header class='<?php echo $classNames ?>'>
    <h1 class='title-small__title'>
      <?php echo $data['title'] ?>
    </h1>
    <hr class='title-small__line' />
    <?php if($data['dateMachine'] && $data['dateHuman']) : ?>
    <time
      class='title-small__date'
      datetime='<?php echo $data['dateMachine']; ?>'
    >
      <?php echo $data['dateHuman'] ?>
    </time>
    <?php endif; ?>
  </header>

<?php } ?>

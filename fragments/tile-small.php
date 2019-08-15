<?php function Fragment_TileSmall(
  array $data,
  string $className = ''
) {
  $classNames = implode(' ', [
    'tile-small',
    $className !== '' ? 'tile-small--'.$className : '',
  ]); ?>

  <div
    class='<?= $classNames ?>'
    style='background-image: url(<?= $data['thumbnail']; ?>)'
  >
    <a 
      class='tile-small__link'
      href='<?= $data['url'] ?>'
    >
      <h3 class='tile-small__title'>
        <?= $data['title'] ?>
      </h3>
      <hr class='tile-small__line' />
      <span class='tile-small__date'>
        <?= $data['date'] ?>
      </span>
    </a>
  </div>

<?php } ?>

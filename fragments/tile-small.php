<?php function Fragment_TileSmall(
  array $data,
  string $className = ''
) {
  $classNames = implode(' ', [
    'tile-small',
    $className !== '' ? 'tile-small--'.$className : '',
  ]); ?>

  <div
    class='<?php echo $classNames ?>'
    style='background-image: url(<?php echo $data['thumbnail']; ?>)'
  >
    <a 
      class='tile-small__link'
      href='<?php echo $data['url'] ?>'
    >
      <h3 class='tile-small__title'>
        <?php echo $data['title'] ?>
      </h3>
      <hr class='tile-small__line' />
      <span class='tile-small__date'>
        <?php echo $data['date'] ?>
      </span>
    </a>
  </div>

<?php } ?>

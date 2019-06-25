<?php function Fragment_TileBig(
  array $data,
  string $className = ''
) {
  $classNames = implode(' ', [
    'tile-big',
    $className !== '' ? 'tile-big--'.$className : '',
  ]);
  $categoriesNames = [];
  foreach ($data['category'] as $category) { 
    array_push($categoriesNames, $category->name);
  } ?>

  <div
    class='<?php echo $classNames ?>'
    style='background-image: url(<?php echo $data['thumbnail']; ?>)'
  >
    <a 
      class='tile-big__link'
      href='<?php echo $data['url'] ?>'
    >
      <div class='tile-big__wrapper'>
        <h3 class='tile-big__title'>
          <?php echo $data['title'] ?>
        </h3>
        <p class='tile-big__category'>
          <?php echo implode(' • ', $categoriesNames); ?>
        </p>
        <hr class='tile-big__line' />
        <span class='tile-big__meta'>
          <?php echo implode(' • ', [$data['date'], $data['readingTime']]); ?>
        </span>
      </div>
    </a>
  </div>

<?php } ?>

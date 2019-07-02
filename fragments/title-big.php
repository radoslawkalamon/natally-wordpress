<?php function Fragment_TitleBig(
  array $data,
  string $className = ''
) {
  $classNames = implode(' ', [
    'title-big',
    $className !== '' ? 'title-big--'.$className : '',
  ]);
  $categoriesNames = [];
  foreach ($data['category'] as $category) { 
    array_push($categoriesNames, $category->name);
  } ?>

  <div
    class='<?php echo $classNames ?>'
    style='background-image: url(<?php echo $data['thumbnail']; ?>)'
  >
    <div class='title-big__wrapper'>
      <h1 class='title-big__title'>
        <?php echo $data['title'] ?>
      </h1>
      <p class='title-big__category'>
        <?php echo implode(' • ', $categoriesNames); ?>
      </p>
      <hr class='title-big__line' />
      <p class='title-big__meta'>
        <time datetime='<?php echo $data['dateMachine']; ?>'>
          <?php echo $data['dateHuman'] ?>
        </time>
         • 
        <?php echo $data['readingTime']; ?>
      </p>
    </div>
  </div>

<?php } ?>

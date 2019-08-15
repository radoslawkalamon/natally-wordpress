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
    class='<?= $classNames ?>'
    style='background-image: url(<?= $data['thumbnail']; ?>)'
  >
    <div class='title-big__wrapper'>
      <h1 class='title-big__title'>
        <?= $data['title']; ?>
      </h1>
      <p class='title-big__category'>
        <?= implode(' • ', $categoriesNames); ?>
      </p>
      <hr class='title-big__line' />
      <p class='title-big__meta'>
        <time datetime='<?= $data['dateMachine']; ?>'>
          <?= $data['dateHuman']; ?>
        </time>
         • 
        <?= $data['readingTime']; ?>
      </p>
    </div>
  </div>

<?php } ?>

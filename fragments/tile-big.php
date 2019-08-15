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
    class='<?= $classNames ?>'
    data-background-lazy-loading='<?= $data['thumbnail']; ?>'
  >
    <a 
      class='tile-big__link'
      href='<?= $data['url'] ?>'
    >
      <?php if ($data['audiobook'] !== '') : ?>
      <span class='tile-big__audiobook'>
        <?= load_inline_svg('audiobook.svg'); ?>
      </span>
      <?php endif; ?>
      <div class='tile-big__wrapper'>
        <h3 class='tile-big__title'>
          <?= $data['title'] ?>
        </h3>
        <p class='tile-big__category'>
          <?= implode(' • ', $categoriesNames); ?>
        </p>
        <hr class='tile-big__line' />
        <span class='tile-big__meta'>
          <?= implode(' • ', [$data['date'], $data['readingTime']]); ?>
        </span>
      </div>
    </a>
  </div>

<?php } ?>

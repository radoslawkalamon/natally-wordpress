<?php function Fragment_TilePoem(
  array $styleClasses = [],
  array $data
) { 
  $classNames = [
    'tile-poem',
    ...array_map(fn($element) => 'tile-poem--'.$element, $styleClasses),
  ];
  ?>

  <article
    class='<?= implode(' ', $classNames); ?>'
    data-background-lazy-loading='<?= $data['thumbnail']; ?>'
  >
    <a
      class='tile-poem__content'
      href='<?= $data['permalink']; ?>'
    >
      <header class='tile-poem__header'>
        <h1 class='tile-poem__title'>
          <?= $data['title']; ?>
        </h1>
      </header>
      <footer class='tile-poem__meta'>
        <time
          class='tile-poem__date'
          datetime='<?= $data['dateMachine']; ?>'
        >
          <?= $data['dateHuman'] ?>
        </time>
      </footer>
    </a>
  </article>
<?php }
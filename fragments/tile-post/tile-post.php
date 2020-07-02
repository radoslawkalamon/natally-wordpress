<?php function Fragment_TilePost(
  array $styleClasses = [],
  array $data
) { 
  $classNames = [
    'tile-post',
    ...array_map(fn($element) => 'tile-post--'.$element, $styleClasses),
  ];
  ?>

  <article
    class='<?= implode(' ', $classNames); ?>'
    data-background-lazy-loading='<?= $data['thumbnail']; ?>'
  >
    <a
      class='tile-post__content-wrapper'
      href='<?= $data['permalink']; ?>'
    >
      <?php if ($data['audiobook'] !== '') : ?>
      <span class='tile-post__audiobook'>
        <?= load_inline_svg('audiobook.svg'); ?>
      </span>
      <?php endif; ?>
      <div class='tile-post__content'>
        <header class='tile-post__header'>
          <h1 class='tile-post__title'>
            <?= $data['title']; ?>
          </h1>
        </header>
        <footer class='tile-post__meta'>
          <time
            class='tile-post__date'
            datetime='<?= $data['dateMachine']; ?>'
          >
            <?= $data['dateHuman'] ?>
          </time>
          •
          <?= $data['readingTime']; ?>
        </footer>
      </div>
    </a>
  </article>
<?php }
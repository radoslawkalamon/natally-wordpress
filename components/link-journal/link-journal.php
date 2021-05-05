<?php function Component_LinkJournal(
  array $styleClasses = []
) { 
  $classNames = [
    'link-journal',
    ...array_map(fn($element) => 'link-journal--'.$element, $styleClasses),
  ];
  $isAudiobook = get_post_meta(get_the_ID(), 'soundcloud_track_id', true) !== '';
  ?>

  <article class='<?= implode(' ', $classNames); ?>'>
    <a
      class='link-journal__content'
      href='<?= get_the_permalink(); ?>'
    >
      <header class='link-journal__header'>
        <h1 class='link-journal__title'>
          <?= get_the_title(); ?>
        </h1>
      </header>
      <footer class='link-journal__meta'>
        <?= get_the_date(); ?>
      </footer>
      <div class='link-journal__excerpt'>
        <?= get_the_excerpt(); ?>
      </div>
      <?php if ($isAudiobook) : ?>
      <span class='link-journal__audiobook'>
        <?= Component_Icon('audiobook.svg'); ?>
      </span>
      <?php endif; ?>
      <div
        class='link-journal__read-more'
        aria-hidden='true'
      >
        Czytaj więcej
      </div>
    </a>
  </article>

<?php }

$args['QUEUE_STYLES']->push('components-link-journal', 'components/link-journal/link-journal.css');

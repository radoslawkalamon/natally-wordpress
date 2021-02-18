<?php function Component_LinkStory(
  array $styleClasses = []
) { 
  $classNames = [
    'link-story',
    ...array_map(fn($element) => 'link-story--'.$element, $styleClasses),
  ];
  $isAudiobook = get_post_meta(get_the_ID(), 'soundcloud_track_id', true) !== '';
  ?>

  <article
    class='<?= implode(' ', $classNames); ?>'
    data-background-lazy-loading='<?= get_the_post_thumbnail_url(null, 'post-thumbnail-desktop-1x'); ?>'
  >
    <a
      class='link-story__content-wrapper'
      href='<?= get_the_permalink(); ?>'
    >
      <?php if ($isAudiobook) : ?>
      <span class='link-story__audiobook'>
        <?= Component_Icon('audiobook.svg'); ?>
      </span>
      <?php endif; ?>
      <div class='link-story__content'>
        <header class='link-story__header'>
          <h1 class='link-story__title'>
            <?= get_the_title(); ?>
          </h1>
        </header>
        <footer class='link-story__meta'>
          <?= implode(' • ', [
            get_the_date(),
            get_post_meta(get_the_ID(), 'reading_time', true),
          ]); ?>
        </footer>
      </div>
    </a>
  </article>
<?php }

$args['QUEUE_STYLES']->push('components-link-story', 'components/link-story/link-story.css');
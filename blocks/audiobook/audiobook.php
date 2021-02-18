<?php function Block_Audiobook() { ?>
  <?php $trackID = get_post_meta(get_the_ID(), 'soundcloud_track_id', true); ?>
  <?php $isAudiobook = $trackID !== ''; ?>

  <?php if ($isAudiobook) : ?>
  <section class='audiobook'>
    <iframe
      class='audiobook__iframe'
      src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?= $trackID; ?>%3Fsecret_token%3Ds-rD22e&amp;color=%23e2000e&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true'
      width='100%'
      height='130'
      frameborder='no'
      scrolling='no'
      aria-label='Audiobook dla "<?= get_the_title(); ?>" w serwisie SoundCloud'
    ></iframe>
  </section>
  <?php endif; ?>
<?php }

$args['QUEUE_STYLES']->push('blocks-audiobook', 'blocks/audiobook/audiobook.css');

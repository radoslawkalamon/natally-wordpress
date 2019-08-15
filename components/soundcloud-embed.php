<?php function Component_SoundcloudEmbed(
  string $trackID,
  string $className = ''
) {
  $classNames = implode(' ', [
    'embed-soundcloud',
    $className !== '' ? 'embed-soundcloud--'.$className : '',
  ]); ?>
  <?php if ($trackID !== '') : ?>

    <div class='<?= $classNames; ?>'>
      <p class='embed-soundcloud__text'>
        Przesłuchaj jako audiobook
      </p>
      <iframe
        class='embed-soundcloud__iframe'
        src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?= $trackID; ?>%3Fsecret_token%3Ds-rD22e&amp;color=%23e2000e&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true'
        width='100%'
        height='166'
        frameborder='no'
        scrolling='no'
      ></iframe>
    </div>

  <?php endif; ?>
<?php } ?>

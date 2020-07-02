<?php function Block_Audiobook(
  array $styleClasses = [],
  array $data
) {
  $isAudiobookLoadable = isset($data['trackID']) && $data['trackID'] !== '';

  $classNames = [
    'audiobook',
    $isAudiobookLoadable ? 'audiobook--loaded' : 'audiobook--missing',
    ...array_map(fn($element) => 'audioboook--'.$element, $styleClasses),
  ]; ?>
  <section
    aria-hidden="<?= $isAudiobookLoadable ? 'false' : 'true'; ?>"
    class='<?= implode(' ', $classNames); ?>'
  >
    <?php if ($isAudiobookLoadable) : ?>
      <iframe
        class='audiobook__iframe'
        src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?= $data['trackID']; ?>%3Fsecret_token%3Ds-rD22e&amp;color=%23e2000e&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true'
        width='100%'
        height='130'
        frameborder='no'
        scrolling='no'
      ></iframe>
    <?php else : ?>
      <div class='audiobook__icon'>
        <?= load_inline_svg('audiobook.svg'); ?>
      </div>
      <?php Fragment_PlainText(
        ['align-center', 'like-title'],
        'Audiobook w przygotowaniu'
      ); ?>
    <?php endif; ?>
  </section>
<?php }
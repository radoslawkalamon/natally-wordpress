<?php function Component_SocialMedia(
  array $styleClasses = []
) {
  $classNames = [
    'social-media',
    ...array_map(fn($element) => 'social-media--'.$element, $styleClasses),
  ];

  $socialMedia = [
    [
      'alt' => 'Odwiedź mnie na Facebooku',
      'classname' => 'facebook',
      'icon' => 'facebook.svg',
      'link' => 'https://www.facebook.com/169cmpl',
    ],
    [
      'alt' => 'Odwiedź mnie na Instagramie',
      'classname' => 'instagram',
      'icon' => 'instagram.svg',
      'link' => 'https://instagram.com/radoslawkalamon',
    ],
    [
      'alt' => 'Odwiedź mnie na Twitterze',
      'classname' => 'twitter',
      'icon' => 'twitter.svg',
      'link' => 'https://twitter.com/radoslawkalamon',
    ],
    [
      'alt' => 'Odwiedź mnie na SoundCloud',
      'classname' => 'soundcloud',
      'icon' => 'soundcloud.svg',
      'link' => 'https://soundcloud.com/169cmpl',
    ],
  ];
  ?>

  <ul class='<?= implode(' ', $classNames); ?>'>
    <?php foreach ($socialMedia as $element) : ?>
    <li class='social-media__item'>
      <a
        title='<?= $element['alt']; ?>'
        aria-label='<?= $element['alt']; ?>'
        class='social-media__link'
        href='<?= $element['link']; ?>'
        rel='noopener noreferrer'
        target='_blank'
      >
        <?= Component_Icon($element['icon']); ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
<?php }

natally_push_style('components-social-media', 'components/social-media/social-media.css');

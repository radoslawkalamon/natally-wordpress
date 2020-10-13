<?php function Component_SocialMedia(array $styleClasses = []) { ?>
  <?php
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
  <?php Fragment_LinkIcons($styleClasses, $socialMedia); ?>
<?php }
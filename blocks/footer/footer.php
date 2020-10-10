<?php function Block_Footer() { ?>
  <?php
  // $socialMedia = [
  //   [
  //     'alt' => 'Odwiedź mnie na Facebooku',
  //     'classname' => 'facebook',
  //     'icon' => 'facebook.svg',
  //     'link' => 'https://www.facebook.com/169cmpl',
  //   ],
  //   [
  //     'alt' => 'Odwiedź mnie na Instagramie',
  //     'classname' => 'instagram',
  //     'icon' => 'instagram.svg',
  //     'link' => 'https://instagram.com/radoslawkalamon',
  //   ],
  //   [
  //     'alt' => 'Odwiedź mnie na Twitterze',
  //     'classname' => 'twitter',
  //     'icon' => 'twitter.svg',
  //     'link' => 'https://twitter.com/radoslawkalamon',
  //   ],
  //   [
  //     'alt' => 'Odwiedź mnie na SoundCloud',
  //     'classname' => 'soundcloud',
  //     'icon' => 'soundcloud.svg',
  //     'link' => 'https://soundcloud.com/169cmpl',
  //   ],
  // ];
  ?>

  <footer class='footer'>
    <div class='footer__copyright'>
      &copy; <?= date('Y'); ?> <a href='<?= get_the_author_meta('user_url', 1); ?>' rel='noopener noreferrer'>Radosław Kalamon</a>
    </div>
    <div class='footer__menu'>
      <?php Fragment_Menu(['footer'], 'footer-menu'); ?>
    </div>
  </footer>
<?php }
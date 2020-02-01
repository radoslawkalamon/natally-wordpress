<?php function Component_TheHeader() { ?>
  <?php 
    $ListLinkIcon_Argument = [
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

  <header class='header'>
    <button
      class='header__button header__button--left'
      data-change-theme
      type='button'
    >
      <img
        alt='Logo 169cm.pl'
        class='header__icon'
        src='<?= get_template_directory_uri(); ?>/images/theme_change.svg'
      />
    </button>
    <div class='header__logo-wrapper'>
      <a href='<?= esc_url(home_url()); ?>'>
        <img
          alt='Logo 169cm.pl'
          class='header__logo'
          src='<?= get_template_directory_uri(); ?>/images/169cm_pl_logo.svg'
        />
      </a>
    </div>
    <button
      class='header__button header__button--right'
      data-hamburger
      type='button'
    >
      <img
        alt='Logo 169cm.pl'
        class='header__icon'
        src='<?= get_template_directory_uri(); ?>/images/hamburger.svg'
      />
    </button>
    <nav class='header__navigation' data-navigation>
      <?php Fragment_Menu('header-menu', 'header-menu'); ?>
      <?php Fragment_ListLinkIcon($ListLinkIcon_Argument, 'header-menu'); ?>
    </nav>
  </header>
  <script src='<?= get_template_directory_uri(); ?>/js/the-header.js' defer></script>

<?php } ?>

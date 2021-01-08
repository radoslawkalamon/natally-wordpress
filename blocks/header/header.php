<?php function Block_Header() { ?>
  <header class='header'>
    <div class='header__inner'>
      <div class='header__button-left'>
        <?php Component_DrawerButton([], 'sidebar', 'hamburger.svg'); ?>
      </div>
      <div class='header__logo'>
        <?php Component_Logo(['header']); ?>
      </div>
      <div class='header__button-right'>
        <?php Component_DrawerButton([], 'settings', 'cog.svg'); ?>
      </div>
    </div>
  </header>
<?php }

natally_push_style('blocks-header', 'blocks/header/header.css');
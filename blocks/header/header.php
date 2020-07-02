<?php function Block_Header() { ?>
  <header class='header'>
    <div class='header__inner'>
      <div class='header__button-left'>
        <?php Component_DrawerButton([], 'left', 'hamburger.svg'); ?>
      </div>
      <div class='header__logo'>
        <a class='header__link' href='<?= home_url(); ?>'>
          <?= load_inline_svg('169cm_logo.svg'); ?>
        </a>
      </div>
      <div class='header__button-right'>
        <?php Component_DrawerButton([], 'right', 'cog.svg'); ?>
      </div>
    </div>
  </header>
<?php }
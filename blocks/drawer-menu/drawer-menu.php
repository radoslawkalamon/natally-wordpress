<?php function Content_DrawerMenu() { ?>
  <div class='drawer-menu'>
    <?php Fragment_Menu(['header'], 'header-menu'); ?>
  </div>
<?php } 

function Block_DrawerMenu() {
  Component_Drawer(
    [],
    'left',
    'Content_DrawerMenu'
  );
}
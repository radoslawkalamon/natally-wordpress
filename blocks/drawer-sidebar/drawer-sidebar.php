<?php function Content_DrawerSidebar() { ?>
  <?php Fragment_Logo(['sidebar']); ?>
  <?php Fragment_Menu(['header'], 'header-menu'); ?>
  <?php Component_SocialMedia(['social-media']); ?>
  <?php Component_DrawerButton(['sidebar'], 'settings', 'cog.svg'); ?>
<?php } 

function Block_DrawerSidebar() {
  Component_Drawer(
    [],
    'sidebar',
    'Content_DrawerSidebar'
  );
}
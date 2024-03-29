<?php function Content_DrawerSidebar() { ?>
  <?php Component_Logo(['sidebar']); ?>
  <?php Component_Menu(['sidebar'], 'header-menu'); ?>
  <?php Component_SocialMedia(['sidebar']); ?>
  <?php Component_DrawerButton(['sidebar'], 'settings', 'cog.svg', 'Ustawienia'); ?>
<?php } 

function Block_DrawerSidebar() {
  Component_Drawer(
    [],
    'sidebar',
    'Content_DrawerSidebar'
  );
}

$args['QUEUE_STYLES']->push('blocks-drawer-sidebar', 'blocks/drawer-sidebar/drawer-sidebar.css');

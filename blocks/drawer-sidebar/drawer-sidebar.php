<?php function Content_DrawerSidebar() { ?>
  <?php Component_Logo(['sidebar']); ?>
  <?php Component_Menu(['sidebar'], 'header-menu'); ?>
  <?php Component_SocialMedia(['sidebar']); ?>
  <?php Component_DrawerButton(['sidebar'], 'settings', 'cog.svg'); ?>
<?php } 

function Block_DrawerSidebar() {
  Component_Drawer(
    [],
    'sidebar',
    'Content_DrawerSidebar'
  );
}

natally_push_style('blocks-drawer-sidebar', 'blocks/drawer-sidebar/drawer-sidebar.css');

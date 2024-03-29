<?php function Content_DrawerSettings() { ?>
  <?php $colorSchemas = [
    ['title' => 'Automatyczny', 'value' => 'auto'],
    ['title' => 'Jasny', 'value' => 'light'],
    ['title' => 'Ciemny', 'value' => 'dark'],
    ['title' => 'Sepia', 'value' => 'sepia'],
    ['title' => 'Szary', 'value' => 'gray'],
  ]; ?>
  <form name='website-settings' class='drawer-settings'>
    <?php Component_Title(
      [],
      'Motyw',
      '4'
    ); ?>
    <div class='color-schema-list'>
      <?php foreach ($colorSchemas as $colorSchema) : ?>
        <input
          class='color-schema-list__radio'
          type='radio'
          name='color-schema'
          title='<?= $colorSchema['title']; ?>'
          value='<?= $colorSchema['value']; ?>'
        />
      <?php endforeach; ?>
    </div>
  </form>
<?php } 

function Block_DrawerSettings() {
  Component_Drawer(
    [],
    'settings',
    'Content_DrawerSettings'
  );
}

$args['QUEUE_STYLES']->push('blocks-drawer-settings', 'blocks/drawer-settings/drawer-settings.css');
$args['QUEUE_SCRIPTS']->push('blocks-drawer-settings', 'blocks/drawer-settings/drawer-settings.js');

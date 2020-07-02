<?php function Content_DrawerSettings() { ?>
  <?php $colorSchemas = [
    ['title' => 'Automatyczny', 'value' => 'auto'],
    ['title' => 'Jasny', 'value' => 'light'],
    ['title' => 'Ciemny', 'value' => 'dark'],
    ['title' => 'Sepia', 'value' => 'sepia'],
    ['title' => 'Szary', 'value' => 'gray'],
  ]; ?>
  <form name='website-settings' class='drawer-settings'>
    <?php Fragment_Title(
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
    <script src='<?= get_template_directory_uri(); ?>/blocks/drawer-settings/drawer-settings.js' defer></script>
  </form>
<?php } 

function Block_DrawerSettings() {
  Component_Drawer(
    [],
    'right',
    'Content_DrawerSettings'
  );
}
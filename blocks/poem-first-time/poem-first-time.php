<?php function Block_PoemFirstTime() { ?>
  <div class='poem-first-time'>
    <?php Component_Section(
      [],
      [
        'tag' => 'aside',
        'title' => 'Pierwszy raz?',
        'buttonLabel' => 'Tak, z przyjemnością!',
        'buttonHref' => 343
      ],
      'Component_Text',
      [['align-center'], 'Chcesz dowiedzieć się więcej o Poezji 3.14?']
    ); ?>
  </div>
<?php }
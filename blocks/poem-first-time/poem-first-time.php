<?php function Block_PoemFirstTime() { ?>
  <div class='poem-first-time'>
    <?php Component_Section(
      [],
      [
        'tag' => 'aside',
        'title' => 'Pierwszy raz?',
        'buttonLabel' => 'Tak, z przyjemnością!',
        'buttonHref' => NATALLY_PAGE_POEMS
      ],
      'Component_Text',
      [['align-center'], 'Chcesz dowiedzieć&nbsp;się więcej o&nbsp;Poezji&nbsp;3.14?']
    ); ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-poem-first-time', 'blocks/poem-first-time/poem-first-time.css');

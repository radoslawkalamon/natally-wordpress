<?php function Block_PoemMeta() { ?>
  <div class='poem-meta'>
    <?php Component_Meta(['poem'], get_the_title(), get_the_date()); ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-poem-meta', 'blocks/poem-meta/poem-meta.css');

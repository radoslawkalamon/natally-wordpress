<?php function Block_PoemMeta() { ?>
  <div class='poem-meta'>
    <?php Component_Meta(['poem'], get_the_title(), get_the_date()); ?>
  </div>
<?php }

natally_push_style('blocks-poem-meta', 'blocks/poem-meta/poem-meta.css');

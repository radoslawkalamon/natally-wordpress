<?php function Block_PoemContent() { ?>
  <?php $content = apply_filters('the_content', get_the_content()); ?>

  <div class='poem-content'>
    <?php Component_Content(['poem'], $content); ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-poem-content', 'blocks/poem-content/poem-content.css');

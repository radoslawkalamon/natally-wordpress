<?php function Block_StoryContent() { ?>
  <?php $content = apply_filters('the_content', get_the_content()); ?>

  <div class='story-content'>
    <?php Component_Content(['story'], $content, true); ?>
  </div>
<?php }
<?php function Block_JournalContent() { ?>
  <?php $content = apply_filters('the_content', get_the_content()); ?>

  <div class='journal-content'>
    <?php Component_Content(['journal'], $content, true); ?>
  </div>
<?php }
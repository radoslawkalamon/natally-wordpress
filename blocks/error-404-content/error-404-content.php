<?php function Block_Error404Content() { ?>
  <?php $content = apply_filters('the_content', get_the_content(NATALLY_PAGE_404)); ?>

  <div class='error-404-content'>
    <?php Component_Content(['poem'], $content); ?>
  </div>

<?php }

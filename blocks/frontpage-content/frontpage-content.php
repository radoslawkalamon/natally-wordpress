<?php function Block_FrontpageContent() { ?>
  <?php $frontpageContent = get_post(get_option( 'page_on_front'))->post_content; ?>
  <?php $content = apply_filters('the_content', $frontpageContent); ?>

  <div class='frontpage-content'>
    <?php Component_Content(['frontpage'], $content); ?>
  </div>
<?php }

natally_push_style('blocks-frontpage-content', 'blocks/frontpage-content/frontpage-content.css');

<?php function Block_FrontpageContent() {
  $frontpageContent = get_post(get_option( 'page_on_front'))->post_content;
  $content = apply_filters('the_content', $frontpageContent);

  Component_Content(['frontpage'], $content);
}
<?php function Block_PageContent() {
  $content = apply_filters('the_content', get_the_content());

  Component_Content(['page'], $content);
}
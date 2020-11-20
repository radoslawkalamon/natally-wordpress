<?php
$postCategories = get_the_category();
$postParentCategory = !empty($postCategories) ? $postCategories[0]->cat_ID : 0;

switch ($postParentCategory) {
  case 3:
    get_template_part('single-story');
    break;
  case 5:
    get_template_part('single-poem');
    break;
  case 7:
    get_template_part('single-journal');
    break;
  default:
    // Redirect to 404?
}
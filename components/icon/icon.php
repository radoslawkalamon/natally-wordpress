<?php function Component_Icon(string $filename) {
  $image = get_template_directory().'/images/'.$filename;
  echo file_exists($image) ? file_get_contents($image) : '';
}
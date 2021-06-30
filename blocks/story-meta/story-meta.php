<?php function Block_StoryMeta() {
  $date = get_the_date();
  $readingTime = get_post_meta(get_the_ID(), 'reading_time', true);
  $subtitle = implode(' ⋅ ', [$date, $readingTime]);

  Component_Meta(['story'], get_the_title(), $subtitle);
}
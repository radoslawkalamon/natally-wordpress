<?php function Block_StoryThumbnail() { ?>
  <?php $thumbnail = get_the_post_thumbnail_url(null, 'post-thumbnail-desktop-1x'); ?>

  <div
    aria-hidden='true'
    class='story-thumbnail'
    style='background-image: url("<?= $thumbnail; ?>")'
  ></div>
<?php }

$args['QUEUE_STYLES']->push('blocks-story-thumbnail', 'blocks/story-thumbnail/story-thumbnail.css');

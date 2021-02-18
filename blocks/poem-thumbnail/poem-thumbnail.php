<?php function Block_PoemThumbnail() { ?>
  <?php $thumbnail = get_the_post_thumbnail_url(); ?>

  <div
    aria-hidden='true'
    class='poem-thumbnail'
    style='background-image: url("<?= $thumbnail; ?>")'
  ></div>
<?php }

$args['QUEUE_STYLES']->push('blocks-poem-thumbnail', 'blocks/poem-thumbnail/poem-thumbnail.css');

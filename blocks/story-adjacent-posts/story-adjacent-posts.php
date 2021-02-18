<?php function Block_StoryAdjacentPosts() {
  $prevPost = get_previous_post(true);
  $nextPost = get_next_post(true);
  ?>

  <div class='story-adjacent-posts'>
    <?php if ($prevPost) : ?>
    <?php Component_LinkAdjacentPost(['prev'], 'Poprzednie', get_the_title($prevPost), get_the_permalink($prevPost)); ?>
    <?php endif; ?>
    <?php if ($nextPost) : ?>
    <?php Component_LinkAdjacentPost(['next'], 'Następne', get_the_title($nextPost), get_the_permalink($nextPost)); ?>
    <?php endif; ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-story-adjacent-posts', 'blocks/story-adjacent-posts/story-adjacent-posts.css');

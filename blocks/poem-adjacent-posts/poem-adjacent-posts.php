<?php function Block_PoemAdjacentPosts() {
  $prevPost = get_previous_post(true);
  $nextPost = get_next_post(true);
  ?>

  <div class='poem-adjacent-posts'>
    <?php if ($prevPost) : ?>
    <?php Component_LinkAdjacentPost(['prev'], 'Poprzednia', get_the_title($prevPost), get_the_permalink($prevPost)); ?>
    <?php endif; ?>
    <?php if ($nextPost) : ?>
    <?php Component_LinkAdjacentPost(['next'], 'Następna', get_the_title($nextPost), get_the_permalink($nextPost)); ?>
    <?php endif; ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-poem-adjacent-posts', 'blocks/poem-adjacent-posts/poem-adjacent-posts.css');

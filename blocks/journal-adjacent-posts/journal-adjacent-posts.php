<?php function Block_JournalAdjacentPosts() {
  $prevPost = get_previous_post(true);
  $nextPost = get_next_post(true);
  ?>

  <div class='journal-adjacent-posts'>
    <?php if ($prevPost) : ?>
    <?php Component_LinkAdjacentPost(['prev'], 'Poprzedni', get_the_title($prevPost), get_the_permalink($prevPost)); ?>
    <?php endif; ?>
    <?php if ($nextPost) : ?>
    <?php Component_LinkAdjacentPost(['next'], 'Następny', get_the_title($nextPost), get_the_permalink($nextPost)); ?>
    <?php endif; ?>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-journal-adjacent-posts', 'blocks/journal-adjacent-posts/journal-adjacent-posts.css');

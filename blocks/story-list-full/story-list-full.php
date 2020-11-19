<?php function Content_StoryListFull() { ?>
  <?php $queryArgs = [
    'cat' => 3,
    'orderby' => 'date',
    'posts_per_page' => -1,
  ]; ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>
  
  <div class='story-list-full'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Component_LinkStory(); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>

<?php function Block_StoryListFull() { ?>
  <?php Component_Section(
    [],
    [
      'tag' => 'section',
      'title' => 'Opowiadania'
    ],
    'Content_StoryListFull',
    [],
  ); ?>
<?php }
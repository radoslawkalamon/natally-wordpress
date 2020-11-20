<?php function Block_PoemListFull() { ?>
  <?php $queryArgs = [
    'cat' => 5,
    'orderby' => 'date',
    'posts_per_page' => -1,
  ]; ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <div class='poem-list-full'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Component_LinkPoem(); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }
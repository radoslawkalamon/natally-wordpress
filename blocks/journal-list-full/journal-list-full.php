<?php function Block_JournalListFull() { ?>
  <?php $queryArgs = [
    'cat' => 7,
    'orderby' => 'date',
    'posts_per_page' => -1,
  ]; ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>
  
  <div class='journal-list-full'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Component_LinkJournal(); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }

natally_push_style('blocks-journal-list-full', 'blocks/journal-list-full/journal-list-full.css');

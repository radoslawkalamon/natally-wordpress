<?php function Component_ListJournal(
  array $styleClasses = [],
  $queryArgs
) {
  $classNames = [
    'list-journal',
    ...array_map(fn($element) => 'list-journal--'.$element, $styleClasses),
  ];
  $query = new WP_Query($queryArgs);
  ?>
  
  <?php if ($query->have_posts()) : ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Component_LinkJournal(); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }

natally_push_style('components-list-journal', 'components/list-journal/list-journal.css');

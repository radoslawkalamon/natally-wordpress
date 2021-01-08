<?php function Component_ListStory(
  array $styleClasses = [],
  $queryArgs
) {
  $classNames = [
    'list-story',
    ...array_map(fn($element) => 'list-story--'.$element, $styleClasses),
  ];
  $query = new WP_Query($queryArgs);
  ?>
  
  <?php if ($query->have_posts()) : ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Component_LinkStory(); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }

natally_push_style('components-list-story', 'components/list-story/list-story.css');

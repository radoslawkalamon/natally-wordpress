<?php function Component_ListPoem(
  array $styleClasses = [],
  $queryArgs
) {
  $classNames = [
    'list-poem',
    ...array_map(fn($element) => 'list-poem--'.$element, $styleClasses),
  ];
  $query = new WP_Query($queryArgs);
  ?>
  
  <?php if ($query->have_posts()) : ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Component_LinkPoem(); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }

$args['QUEUE_STYLES']->push('components-list-poem', 'components/list-poem/list-poem.css');

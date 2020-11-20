
<?php function Content_PoemListSuggestions() { ?>
  <?php $queryArgs = [
    'cat' => 5,
    'orderby' => 'rand',
    'posts_per_page' => 6,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ]; ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <?php while ($query->have_posts() ) : $query->the_post(); ?>
    <?php Component_LinkPoem(); ?>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>

<?php function Block_PoemListSuggestions() { ?>
  <div class='poem-list-suggestions'>
    <?php Component_Section(
      [],
      [
        'tag' => 'section',
        'title' => 'Poezja 3.14',
        'buttonLabel' => 'Więcej Poezji 3.14',
        'buttonHref' => 343
      ],
      'Content_PoemListSuggestions',
      [],
    ); ?>
  </div>
<?php }






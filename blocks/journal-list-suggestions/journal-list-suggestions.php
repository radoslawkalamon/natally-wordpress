<?php function Content_JournalListSuggestions() { ?>
  <?php $queryArgs = [
    'cat' => 7,
    'orderby' => 'rand',
    'posts_per_page' => 3,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ]; ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <?php while ($query->have_posts() ) : $query->the_post(); ?>
    <?php Component_LinkJournal(); ?>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>

<?php function Block_JournalListSuggestions() { ?>
  <div class='journal-list-suggestions'>
    <?php Component_Section(
      [],
      [
        'tag' => 'section',
        'title' => 'Zapiski',
        'buttonLabel' => 'Więcej Zapisków',
        'buttonHref' => 588
      ],
      'Content_JournalListSuggestions',
      [],
    ); ?>
  </div>
<?php }






<?php function Content_StoryListSuggestions() { ?>
  <?php $queryArgs = [
    'cat' => 3,
    'orderby' => 'rand',
    'posts_per_page' => 2,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
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

<?php function Block_StoryListSuggestions() { ?>
  <?php Component_Section(
    [],
    [
      'tag' => 'section',
      'title' => 'Opowiadania',
      'buttonLabel' => 'Więcej opowiadań',
      'buttonHref' => 0
    ],
    'Content_StoryListSuggestions',
    [],
  ); ?>
<?php }

natally_push_style('blocks-story-list-suggestions', 'blocks/story-list-suggestions/story-list-suggestions.css');

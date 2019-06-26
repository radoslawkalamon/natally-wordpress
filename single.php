<?php get_template_part('components/soundcloud-embed'); ?>
<?php get_template_part('components/the-content-poem'); ?>
<?php get_template_part('components/the-content-post'); ?>
<?php get_template_part('components/carousel-poem'); ?>
<?php get_template_part('components/carousel-posts'); ?>
<?php get_template_part('components/meta-share'); ?>
<?php get_template_part('components/meta-comment'); ?>
<?php get_template_part('components/the-progress-bar'); ?>

<?php get_header(); ?>
<?php
  $TheContent = apply_filters('the_content', get_the_content());
  $MetaShareTitle = 'Udostępnij';
  $MetaShareClassName = 'width-half';
  $MetaCommentTitle = 'Skomentuj';
  $MetaCommentFacebookPost = get_post_meta(get_the_ID(), 'meta_share_facebook_url', true);
  $MetaCommentClassName = 'width-half';
  $CarouselPosts = [
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'post__not_in' => [get_the_ID()],
    'category__not_in' => [5]
  ];
  $CarouselPoem = [
    'cat' => 5,
    'nopaging' => true
  ];
  $SoundcloudEmbed = get_post_meta(get_the_ID(), 'soundcloud_track_id', true);
?>
<?php if (in_category(5)) : ?>
  <article class='post-single post-single--poem'>
    <?php Fragment_TitleSmall([
      'title' => get_the_title(),
      'dateMachine' => get_the_time('Y-m-d'),
      'dateHuman' => get_the_time('d F Y')
    ]); ?>
    <?php Component_TheContentPoem($TheContent); ?>
  </article>
  <div class='post-single__meta'>
    <?php Component_MetaShare($MetaShareTitle, get_permalink(), get_the_title(), $MetaShareClassName); ?>
    <?php Component_MetaComment($MetaCommentTitle, $MetaCommentFacebookPost, $MetaCommentClassName); ?>
    <?php Component_CarouselPoem($CarouselPoem, 'Sprawdź inne', '', false, get_the_ID()); ?>
    <?php Component_CarouselPosts($CarouselPosts, 'Coś dłuższego?'); ?>
  </div>
<?php else: ?>
  <?php Component_TheProgressBar(); ?>
  <article class='post-single post-single--post'>
    <?php Fragment_TitleBig([
      'title' => get_the_title(),
      'dateMachine' => get_the_time('Y-m-d'),
      'dateHuman' => get_the_time('d F Y'),
      'thumbnail' => get_the_post_thumbnail_url(null, 'large'),
      'category' => get_the_category(),
      'readingTime' => get_post_meta(get_the_ID(), 'reading_time', true)
    ]); ?>
    <?php Component_SoundcloudEmbed($SoundcloudEmbed); ?>
    <?php Component_TheContentPost($TheContent) ?>
  </article>
  <div class='post-single__meta'>
    <?php Component_MetaShare($MetaShareTitle, get_permalink(), get_the_title(), $MetaShareClassName); ?>
    <?php Component_MetaComment($MetaCommentTitle, $MetaCommentFacebookPost, $MetaCommentClassName); ?>
    <?php Component_CarouselPosts($CarouselPosts, 'Sprawdź inne'); ?>
    <?php Component_CarouselPoem($CarouselPoem, 'Coś krótszego?'); ?>
  </div>
<?php endif; ?>
<?php get_footer(); ?>

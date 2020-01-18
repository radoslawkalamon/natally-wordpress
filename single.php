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
  $MetaCommentTitle = 'Skomentuj';
  $MetaCommentFacebookPost = get_post_meta(get_the_ID(), 'meta_share_facebook_url', true);
  $CarouselPosts = [
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'post__not_in' => [get_the_ID()],
    'category__not_in' => [5]
  ];
  $CarouselPoem = [
    'cat' => 5,
    'posts_per_page' => 6,
    'orderby' => 'rand',
    'post__not_in' => [get_the_ID()],
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
    <section>
      <?php Fragment_TitleSection($MetaShareTitle); ?>
      <?php Component_MetaShare(get_permalink(), get_the_title()); ?>
    </section>
    <section>
      <?php Fragment_TitleSection($MetaCommentTitle); ?>
      <?php Component_MetaComment($MetaCommentFacebookPost); ?>
    </section>
  </div>  
  <section>
    <?php Fragment_TitleSection('Sprawdź inne'); ?>
    <?php Component_CarouselPoem($CarouselPoem); ?>
    <?php Fragment_Button(343, 'Więcej Poezji 3.14'); ?>
  </section>
  <section>
    <?php Fragment_TitleSection('Coś dłuższego?'); ?>
    <?php Component_CarouselPosts($CarouselPosts); ?>
    <?php Fragment_Button(0, 'Więcej opowiadań'); ?>
  </section>
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
  <section>
    <?php Fragment_TitleSection('Podobało się?'); ?>
    <?php Fragment_Button('https://www.facebook.com/169cmpl', 'Polub fanpage na Facebooku!'); ?>
  </section>
  <div class='post-single__meta'>
    <section>
      <?php Fragment_TitleSection($MetaShareTitle); ?>
      <?php Component_MetaShare(get_permalink(), get_the_title()); ?>
    </section>
    <section>
      <?php Fragment_TitleSection($MetaCommentTitle); ?>
      <?php Component_MetaComment($MetaCommentFacebookPost); ?>
    </section>
  </div>
  <section>
    <?php Fragment_TitleSection('Sprawdź inne'); ?>
    <?php Component_CarouselPosts($CarouselPosts); ?>
    <?php Fragment_Button(0, 'Więcej opowiadań'); ?>
  </section>
  <section>
    <?php Fragment_TitleSection('Coś krótszego?'); ?>
    <?php Component_CarouselPoem($CarouselPoem); ?>
    <?php Fragment_Button(343, 'Więcej Poezji 3.14'); ?>
  </section>
<?php endif; ?>
<?php get_footer(); ?>

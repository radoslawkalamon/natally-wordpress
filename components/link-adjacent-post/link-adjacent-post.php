<?php function Component_LinkAdjacentPost(
  array $styleClasses = [],
  string $label,
  string $title = '',
  string $href = ''
) { 
  $classNames = [
    'link-adjacent-post',
    ...array_map(fn($element) => 'link-adjacent-post--'.$element, $styleClasses),
  ]; ?>

  <article class='<?= implode(' ', $classNames); ?>'>
    <a class='link-adjacent-post__link' href='<?= $href; ?>'>
      <header class='link-adjacent-post__header'>
        <h1 class='link-adjacent-post__title'>
          <?= $title; ?>
        </h1>
      </header>
      <span class='link-adjacent-post__label'>
        <?= $label; ?>
      </span>
    </a>
  </article>

<?php }

$args['QUEUE_STYLES']->push('link-adjacent-post', 'components/link-adjacent-post/link-adjacent-post.css');

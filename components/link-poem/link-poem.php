<?php function Component_LinkPoem(
  array $styleClasses = []
) { 
  $classNames = [
    'link-poem',
    ...array_map(fn($element) => 'link-poem--'.$element, $styleClasses),
  ]; ?>

  <article class='<?= implode(' ', $classNames); ?>'>
    <a
      class='link-poem__content'
      href='<?= get_the_permalink(); ?>'
    >
      <header class='link-poem__header'>
        <h1 class='link-poem__title'>
          <?= get_the_title(); ?>
        </h1>
      </header>
      <footer class='link-poem__meta'>
        <?= get_the_date(); ?>
      </footer>
    </a>
  </article>
<?php }

$args['QUEUE_STYLES']->push('components-link-poem', 'components/link-poem/link-poem.css');

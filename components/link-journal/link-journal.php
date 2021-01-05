<?php function Component_LinkJournal(
  array $styleClasses = []
) { 
  $classNames = [
    'link-journal',
    ...array_map(fn($element) => 'link-journal--'.$element, $styleClasses),
  ]; ?>

  <article class='<?= implode(' ', $classNames); ?>'>
    <a
      class='link-journal__content'
      href='<?= get_the_permalink(); ?>'
    >
      <header class='link-journal__header'>
        <h1 class='link-journal__title'>
          <?= get_the_title(); ?>
        </h1>
      </header>
      <footer class='link-journal__meta'>
        <?= get_the_date(); ?>
      </footer>
      <div class='link-journal__excerpt'>
        <?= get_the_excerpt(); ?>
      </div>
      <div
        class='link-journal__read-more'
        aria-hidden='true'
      >
        Czytaj więcej
      </div>
    </a>
  </article>

<?php }

natally_push_style('components-link-journal', 'components/link-journal/link-journal.css');

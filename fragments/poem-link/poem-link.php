<?php function Fragment_PoemLink(
  array $styleClasses = [],
  array $data
) { 
  $classNames = [
    'poem-link',
    ...array_map(fn($element) => 'poem-link--'.$element, $styleClasses),
  ];
  ?>

  <article class='<?= implode(' ', $classNames); ?>'>
    <a
      class='poem-link__content'
      href='<?= $data['permalink']; ?>'
    >
      <header class='poem-link__header'>
        <h1 class='poem-link__title'>
          <?= $data['title']; ?>
        </h1>
      </header>
      <footer class='poem-link__meta'>
        <time
          class='poem-link__date'
          datetime='<?= $data['dateMachine']; ?>'
        >
          <?= $data['dateHuman'] ?>
        </time>
      </footer>
    </a>
  </article>
<?php }
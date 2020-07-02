<?php function Block_Meta(
  array $styleClasses = [],
  array $data
) {
  $classNames = [
    'meta',
    ...array_map(fn($element) => 'meta--'.$element, $styleClasses),
  ];
  $isDateRenderable = $data['dateMachine'] !== null && $data['dateHuman'] !== null;
  $isReadingTimeRenderable = $data['readingTime'] !== null;
  $isFooterRenderable = ($isDateRenderable) || $isReadingTimeRenderable;
  $isDotFooterRenderable = ($isDateRenderable) && $isReadingTimeRenderable;
  ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <h1 class='meta__title'>
      <?= $data['title']; ?>
    </h1>
    <?php if ($isFooterRenderable) : ?>
    <footer class='meta__footer'>
    <?php endif; ?>
      <?php if ($isDateRenderable) : ?>
      <time
        class='meta__date'
        datetime='<?= $data['dateMachine']; ?>'
      >
        <?= $data['dateHuman'] ?>
      </time>
      <?php endif; ?>
      <?php if ($isDotFooterRenderable) : ?>
      •
      <?php endif; ?>
      <?php if ($isDateRenderable) : ?>
        <?= $data['readingTime']; ?>
      <?php endif; ?>
    <?php if ($isFooterRenderable) : ?>
    </footer>
    <?php endif; ?>
  </div>
<?php }
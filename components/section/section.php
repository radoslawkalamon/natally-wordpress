<?php function Component_Section(
  array $styleClasses = [],
  array $data,
  callable $content,
  array $contentArgs = []
) {
  $classNames = [
    'section',
    ...array_map(fn($element) => 'section--'.$element, $styleClasses),
  ];
  $data['tag'] = $data['tag'] ?? 'section';
  ?>

  <<?= $data['tag']; ?> class='<?= implode(' ', $classNames); ?>'>
    <?php if ($data['title'] !== null) : ?>
    <h2 class='section__title'>
      <?= $data['title']; ?>
    </h2>
    <?php endif; ?>
    <div class='section__content'>
      <?php call_user_func($content, ...$contentArgs); ?>
    </div>
    <?php if ($data['buttonLabel'] !== null && $data['buttonHref'] !== null) : ?>
    <div class='section__button'>
      <?php Component_Button([], $data['buttonLabel'], $data['buttonHref']); ?>
    </div>
    <?php endif; ?>
  </<?= $data['tag']; ?>>
<?php }

natally_push_style('components-section', 'components/section/section.css');

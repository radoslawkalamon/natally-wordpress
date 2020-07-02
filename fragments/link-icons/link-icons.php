<?php function Fragment_LinkIcons(
  array $styleClasses = [],
  array $data
) { 
  $classNames = [
    'link-icons',
    ...array_map(fn($element) => 'link-icons--'.$element, $styleClasses),
  ];
  ?>

  <ul class='<?= implode(' ', $classNames); ?>'>
    <?php foreach ($data as $element) : ?>
    <li class='link-icons__item'>
      <a
        title='<?= $element['alt']; ?>'
        aria-label='<?= $element['alt']; ?>'
        class='link-icons__link'
        href='<?= $element['link']; ?>'
        rel='noopener noreferrer'
        target='_blank'
      >
        <?= load_inline_svg($element['icon']); ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
<?php }
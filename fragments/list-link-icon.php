<?php function Fragment_ListLinkIcon(
  array $data,
  string $className = ''
) {
  $classNames = implode(' ', [
    'list-link-icon',
    $className !== '' ? 'list-link-icon--'.$className : '',
  ]); ?>

  <ul class='<?= $classNames; ?>'>
    <?php foreach ($data as $element) : ?>
    <?php $elementClassNames = implode(' ', [
      'list-link-icon__item',
      $element['classname'] !== '' ? 'list-link-icon__item--'.$element['classname'] : '',
    ]); ?>
    <li class='<?= $elementClassNames; ?>'>
      <a
        aria-label='<?= $element['alt']; ?>'
        title='<?= $element['alt']; ?>'
        class='list-link-icon__link'
        <?= isset($element['hook']) ? $element['hook'] : ''; ?>
        href='<?= $element['link']; ?>'
        rel='noopener noreferrer'
        target='_blank'
      >
      <?= load_inline_svg($element['icon']); ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>

<?php } ?>

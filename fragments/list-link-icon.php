<?php function Fragment_ListLinkIcon(
  array $data,
  string $className = ''
) {
  $classNames = implode(' ', [
    'list-link-icon',
    $className !== '' ? 'list-link-icon--'.$className : '',
  ]); ?>

  <ul class='<?php echo $classNames; ?>'>
    <?php foreach ($data as $element) : ?>
    <?php $elementClassNames = implode(' ', [
      'list-link-icon__item',
      $element['classname'] !== '' ? 'list-link-icon__item--'.$element['classname'] : '',
    ]); ?>
    <li class='<?php echo $elementClassNames; ?>'>
      <a
        class='list-link-icon__link'
        <?php echo isset($element['hook']) ? $element['hook'] : ''; ?>
        href='<?php echo $element['link']; ?>'
        target='_blank'
      >
      <?php echo load_inline_svg($element['icon']); ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>

<?php } ?>

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
        <img
          alt='<?php echo $element['alt']; ?>'
          class='list-link-icon__image'
          src='<?php echo get_template_directory_uri().'/images/'.$element['icon']; ?>'
        />
      </a>
    </li>
    <?php endforeach; ?>
  </ul>

<?php } ?>

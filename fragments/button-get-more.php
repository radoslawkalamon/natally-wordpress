<?php function Fragment_ButtonGetMore(
  int $IDPost,
  string $title,
  string $className = ''
) {
  $classNames = implode(' ', [
    'button-get-more',
    $className !== '' ? 'button-get-more--'.$className : '',
  ]);
  $URLPost = $IDPost === 0
    ? get_home_url()
    : get_permalink($IDPost);
  ?>

  <div class='<?= $classNames; ?>'>
    <a
      class='button-get-more__button'
      href='<?= $URLPost; ?>'
    >
      <?= $title; ?>
    </a>
  </div>

<?php } ?>

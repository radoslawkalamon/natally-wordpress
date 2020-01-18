<?php function Fragment_Button(
  $buttonLink,
  string $title,
  string $className = ''
) {
  $classNames = implode(' ', [
    'button',
    $className !== '' ? 'button--'.$className : '',
  ]);

  // Get button URL by variable type
  $buttonLinkType = gettype($buttonLink);
  $buttonLinkActions = [
    'string'   => function ($URL)    { return $URL; },
    'integer'  => function ($IDPost) { return $IDPost === 0 ? get_home_url() : get_permalink($IDPost); },
  ];
  $buttonLinkURL = $buttonLinkActions[$buttonLinkType]($buttonLink) ?? '#!';
  ?>

  <div class='<?= $classNames; ?>'>
    <a
      class='button__link'
      href='<?= $buttonLinkURL; ?>'
    >
      <?= $title; ?>
    </a>
  </div>

<?php } ?>

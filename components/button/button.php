<?php function Component_Button(
  array $styleClasses = [],
  string $label,
  $href
) { 
  $classNames = [
    'button',
    ...array_map(fn($element) => 'button--'.$element, $styleClasses),
  ];
  // Get button URL by variable type
  $hrefType = gettype($href);
  $hrefStrategies = [
    'string'  => fn ($URL) => $URL,
    'integer' => fn ($postID) => $postID === NATALLY_PAGE_STORIES ? get_home_url() : get_permalink($postID)
  ];
  $href = $hrefStrategies[$hrefType]($href) ?? '#!';
  ?>

  <a
    class='<?= implode(' ', $classNames); ?>'
    href='<?= $href; ?>'
  >
    <?= $label; ?>
  </a>
<?php }

$args['QUEUE_STYLES']->push('components-button', 'components/button/button.css');
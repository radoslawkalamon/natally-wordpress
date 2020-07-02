<?php function Block_CoverImage(
  array $styleClasses = [],
  array $data
) { 
  $classNames = [
    'cover-image',
    ...array_map(fn($element) => 'cover-image--'.$element, $styleClasses),
  ]; ?>
  <div
    aria-hidden='true'
    class='<?= implode(' ', $classNames); ?>'
    style='background-image: url("<?= $data['thumbnail']; ?>")'
  ></div>
<?php }
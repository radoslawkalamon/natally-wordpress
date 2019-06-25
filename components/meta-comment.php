<?php function Component_MetaComment(
  string $title = 'Skomentuj',
  string $facebookPostURL = '',
  string $className = ''
) {
  $classNames = implode(' ', [
    'meta-comment',
    $className !== '' ? 'meta-comment--'.$className : '',
  ]);
  $ListLinkIcon = array_merge(
    $facebookPostURL !== '' ?
    [[
      'alt' => 'Napisz co myślisz na Facebooku',
      'classname' => 'facebook',
      'hook' => 'data-comment-facebook',
      'icon' => 'facebook.svg',
      'link' => $facebookPostURL,
    ]] : [],
    [[
      'alt' => 'Napisz co myślisz na Messengerze',
      'classname' => 'messenger',
      'hook' => 'data-comment-messenger',
      'icon' => 'messenger.svg',
      'link' => 'https://169cm.pl/kontakt/',
    ]]
  ); ?>

  <div class='<?php echo $classNames ?>'>
    <div class='meta-comment__inner'>
      <?php Fragment_TitleSection($title); ?>
      <?php Fragment_ListLinkIcon($ListLinkIcon); ?>
    </div>
  </div>

<?php } ?>

<?php function Component_MetaComment(
  string $facebookPostURL = '',
  string $className = ''
) {
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

  <?php Fragment_ListLinkIcon($ListLinkIcon, $className); ?>

<?php } ?>

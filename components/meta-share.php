<?php function Component_MetaShare(
  string $postURL,
  string $postTitle,
  string $className = ''
) {
  $ListLinkIcon = [
    [
      'alt' => 'Udostępnij na Facebooku',
      'classname' => 'facebook',
      'icon' => 'facebook.svg',
      'link' => 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($postURL),
    ],
    [
      'alt' => 'Udostępnij na Twitterze',
      'classname' => 'twitter',
      'icon' => 'twitter.svg',
      'link' => 'https://twitter.com/intent/tweet?text='.urlencode('"'.$postTitle.'" na').'&url='.urlencode($postURL),
    ]
  ]; ?>

  <?php Fragment_ListLinkIcon($ListLinkIcon, $className); ?>

<?php } ?>

<?php function Component_MetaShare(
  string $title = 'Skomentuj',
  string $postURL,
  string $postTitle,
  string $className = ''
) {
  $classNames = implode(' ', [
    'meta-share',
    $className !== '' ? 'meta-share--'.$className : '',
  ]);
  $ListLinkIcon = [
    [
      'alt' => 'Udostępnij na Facebooku',
      'classname' => 'facebook',
      'hook' => 'data-share',
      'icon' => 'facebook.svg',
      'link' => 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($postURL),
    ],
    [
      'alt' => 'Udostępnij na Twitterze',
      'classname' => 'twitter',
      'hook' => 'data-share',
      'icon' => 'twitter.svg',
      'link' => 'https://twitter.com/intent/tweet?text='.urlencode('"'.$postTitle.'" na').'&url='.urlencode($postURL),
    ]
  ]; ?>

  <div class='<?php echo $classNames ?>'>
    <div class='meta-share__inner'>
      <?php Fragment_TitleSection($title); ?>
      <?php Fragment_ListLinkIcon($ListLinkIcon); ?>
    </div>
  </div>

<?php } ?>

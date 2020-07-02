<?php function Component_SocialMediaShare(
  array $styleClasses = [],
  string $postTitle,
  string $postURL
) { 
  $classNames = [
    'social-media-share',
    ...array_map(fn($element) => 'social-media-share--'.$element, $styleClasses),
  ];  
  $socialMediaShare = [
    [
      'alt' => 'Udostępnij na Facebooku',
      'icon' => 'facebook.svg',
      'link' => 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($postURL),
    ],
    [
      'alt' => 'Udostępnij na Twitterze',
      'icon' => 'twitter.svg',
      'link' => 'https://twitter.com/intent/tweet?text='.urlencode($postTitle).'&url='.urlencode($postURL),
    ]
  ];

  Fragment_LinkIcons([], $socialMediaShare);
}
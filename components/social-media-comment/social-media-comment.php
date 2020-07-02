<?php function Component_SocialMediaComment(
  array $styleClasses = [],
  string $facebookURL
) { 
  $classNames = [
    'social-media-comment',
    ...array_map(fn($element) => 'social-media-comment--'.$element, $styleClasses),
  ];

  $socialMediaComment = [
    ...($facebookURL !== '' ? [[
      'alt' => 'Napisz co myślisz na Facebooku',
      'icon' => 'facebook.svg',
      'link' => $facebookURL,
    ]] : []),
    [
      'alt' => 'Napisz co myślisz na Messengerze',
      'icon' => 'messenger.svg',
      'link' => 'https://169cm.pl/kontakt/',
    ]
  ];

  Fragment_LinkIcons([], $socialMediaComment);
}
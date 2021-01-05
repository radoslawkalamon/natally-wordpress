<?php function Block_DidYouLike() { ?>
  <div class='did-you-like'>
    <?php Component_Section(
      [],
      [
        'tag' => 'aside',
        'title' => 'Podobało się?',
        'buttonLabel' => 'Polub fanpage na Facebooku',
        'buttonHref' => 'https://facebook.com/169cmpl'
      ],
      'Component_Text',
      [['align-center'], 'Chcesz otrzymywać informacje o nowych tekstach na blogu?']
    ); ?>
  </div>
<?php }

<?php function Block_PoemMeta() { ?>
  <div class='poem-meta'>
    <?php Component_Meta(['poem'], get_the_title(), get_the_date()); ?>
  </div>
<?php }
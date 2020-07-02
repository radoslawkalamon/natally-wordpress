<?php
if (in_category(5)) :
  get_template_part('single-poem');
else :
  get_template_part('single-default');
endif;
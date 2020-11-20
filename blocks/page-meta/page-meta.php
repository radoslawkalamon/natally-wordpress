<?php function Block_PageMeta() {
  Component_Meta(['page'], get_the_title());
}
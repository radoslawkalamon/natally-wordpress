<?php function Block_JournalMeta() {
  Component_Meta(['journal'], get_the_title(), get_the_date());
}
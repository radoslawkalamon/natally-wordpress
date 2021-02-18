<?php

class NatallyFileQueueStyles extends NatallyFileQueue {
  protected function doEnqueue(NatallyFile $file) {
    wp_enqueue_style(
      $file->getName(),
      $file->getTemplatePath(),
      [],
      $file->getHash(),
      'all',
    );
  }
}
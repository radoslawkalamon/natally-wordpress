<?php

class NatallyFileQueueScripts extends NatallyFileQueue {
  protected function doEnqueue(NatallyFile $file) {
    wp_enqueue_script(
      $file->getName(),
      $file->getTemplatePath(),
      [],
      $file->getHash(),
      true,
    );
  }
}
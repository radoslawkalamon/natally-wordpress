<?php

class NatallyFileQueue {
  protected array $files = [];
  protected NatallyFilesHashes $filesHashes;

  public function __construct() {
    $this->filesHashes = new NatallyFilesHashes();
  }

  public function push(string $name, string $relativePath) {
    $file = new NatallyFile(
      $name,
      $relativePath,
      $this->filesHashes->getFileHash($relativePath),
    );
    array_push($this->files, $file);
  }

  public function enqueue() {
    foreach ($this->files as $file) {
      $this->doEnqueue($file);
    }
  }

  protected function doEnqueue(NatallyFile $file) {
    var_dump(
      $file->getName(),
      $file->getTemplatePath(),
      $file->getHash(),
    );
  }
}
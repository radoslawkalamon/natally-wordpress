<?php

class NatallyFile {
  protected string $name;
  protected string $relativePath;
  protected string $hash;

  public function __construct(string $name, string $relativePath, string $hash) {
    $this->name = $name;
    $this->relativePath = $relativePath;
    $this->hash = $hash;
  }

  public function getName() {
    return $this->name;
  }

  public function getRelativePath() {
    return $this->relativePath;
  }

  public function getTemplatePath() {
    $relativePath = $this->getRelativePath();
    return get_template_directory_uri().'/'.$relativePath;
  }

  public function getHash() {
    return $this->hash;
  }
}
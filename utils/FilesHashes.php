<?php

class NatallyFilesHashes {
  protected string $tableRelativePath = '/file-hashes.json';
  protected array $table;

  public function __construct() {
    $this->table = $this->getTable();
  }

  public function getFileHash(string $relativePath) {
    return $this->table[$relativePath] ?? time();
  }

  protected function getTable() {
    $tableTemplatePath = $this->getTableTemplatePath();
    $tableContent = file_get_contents($tableTemplatePath);
    return json_decode($tableContent, true);
  }

  protected function getTableTemplatePath() {
    return get_template_directory().$this->tableRelativePath;
  }
}
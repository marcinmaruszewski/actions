<?php

namespace stuff;

use mglaman\PHPStanDrupal\Drupal;
use TheSeer\Tokenizer\Exception;

class actions extends Exception {

  private function __construct() {
    $this->file = 0;
  }

}
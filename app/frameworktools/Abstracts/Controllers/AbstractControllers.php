<?php

namespace App\FrameworkTools\Abstracts\Controllers;

use app\FrameworkTools\ProcessServerElements;

abstract class AbstractControllers {

    protected $processServerElements;

    public function __construct() {
        $this->processServerElements = ProcessServerElements::start
        ();
    }
}
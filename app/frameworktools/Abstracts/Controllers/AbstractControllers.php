<?php

namespace App\FrameworkTools\Abstracts\Controllers;

use App\FrameworkTools\ProcessServerElements;

abstract class AbstractControllers {

    protected $processServerElements;

    public function __construct() {
        $typeofAPI = env('TYPE_API');
        header("Content-Type: application/$typeofAPI"); // sempre colocoar aspas dupla quando contatenar com a variavel

        $this->processServerElements = ProcessServerElements::start();
    }
}
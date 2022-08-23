<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

class HelloWorldControllers extends AbstractControllers {

    public function execute(){

        echo json_encode(["define" => "hello world"]);
    }
}
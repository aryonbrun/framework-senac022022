<?php

namespace App\FrameworkTools;

class ProcessServerElements{

    private static $instance;

    private function __construct(){
        //  SINGLWTON
        
    }

    public static function start(){
        if (!ProcessServerElements::$instance){
            ProcessServerElements::$instance = new
            ProcessServerElements();
        }

        return ProcessServerElements::$instance;
    }
}
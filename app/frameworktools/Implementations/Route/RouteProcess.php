<?php

namespace app\FrameworkTools\implements\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWorldControllers;


class RouteProcess {

    public static function execute() {
        $processServerElements = ProcessServerElements::start();
        $routeArray = [];
        
    
        switch ($processServerElements->getVerb()){
            case 'GET':

                switch ($processServerElements->getRoute()) {

                    case '/hello-world';
                        return (new helloWorldControllers)->execute();
                    break;
                }
        }

    }
}
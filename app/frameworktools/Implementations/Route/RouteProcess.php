<?php

namespace app\FrameworkTools\implements\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWorldControllers;


class RouteProcess {

    public static function execute() {
       $processServerElements = ProcessServerElements::start();

        

       $getRoutes = [
            '/hello-world' => (new HelloWorldControllers)->execute()
        ];

       $postRoutes = [ 
        
        ];
        
        $putRoutes = [

        ];

        $deleteRoutes = [

        ];

        dd($processServerElements, $getRoutes); //verificar se esta chegando
    }
}
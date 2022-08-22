<?php

namespace app\FrameworkTools\implements\Route;

class RouteProcess {

    public static function execute() {
       $processServerElements = ProcessServerElements::start();

       dd($processServerElements);  

       $getRoutes = [

        ];

       $postRoutes = [ 
        
        ];
        
        $putRoutes = [

        ];

        $deleteRoutes = [

        ];

        dd($processServerElements);
    }
}
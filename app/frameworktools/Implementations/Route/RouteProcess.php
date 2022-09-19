<?php

namespace app\FrameworkTools\implements\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWorldControllers;
use App\Controllers\HelloWorldController;
use App\Controllers\TrainingQueryController;
use App\Controllers\TrainingPostController;
use App\Controllers\InsertDataController;
use App\Controllers\ProjectTasksController;

class RouteProcess {

    // CRIANDO UMA ROTA E EXECUTANDO
    public static function execute() {
        $processServerElements = ProcessServerElements::start();
        $routeArray = [];
        
    
        switch ($processServerElements->getVerb()){
            case 'GET':

                switch ($processServerElements->getRoute()) {

                    case '/hello-world';
                        return (new helloWorldControllers)->execute();
                    break;

                    case'/traning-query':
                        return (new TraningQueryController)->execute();
                    break;

                    case '/retorna-carros':
                        return (new ProjectTasksController)->getCar();
                    break;

                    case '/returna-carro-id':
                        return (new ProjectTaskSController)->getCarById();
                    break;

                    case '/retorna-carros-nome':
                        return( new ProjectTasksController)->getCarByName();
                    break;

                    case'/retorna-vendedor':
                        return (new ProjectTasksController)->getSellers();
                    break;

                    case'/retorna-vendedor-id':
                        return (new ProjectTasksController)->getSellerById();
                    break;

                    case '/retporna-vendedor-nome':
                        return (new ProjectTasksControler)->getSellerByName();
                    break;

                    case '/retorna-vendas-nome':
                        return(new ProjectTasksController)->getBuyers();
                    break;

                    case '/retorna-compradores-id':
                        return (new ProjectTasksController)->getBuyersById();
                    break;

                    case '/retorna-comprador-nome':
                        return (new ProjectTasksController)->getBuyersByName();
                    break;

                    case '/retorna-carros-comprador-nome':
                        return (new ProjectTasksController)->getCarsByBuyerName();
                    break;
            
                }

                // NESSE CASO REVISAR E FAZER A ROUTA QUE VAI LIGAR O TRAININGPOSTCONTROLLER
                // FAZER DE MODO DIFERENTE
            case 'POST':
                
                switch($processServerElements->getRoute()){
                    case '/first-post':
                        return (new TrainingPostController)-> execute();
                    break;

                    case '/inset-post':
                        return (new InsertDataController)-> execute();
                    break;
                }

        }

    }
}
<?php

    namespace App\FrameworkTools\Implementations\FactoryMethods;

     use App\FrameworkTools\ProcessServerElements;

    use App\FrameworkTools\Implementations\FactoryMethods\breakStringInVars;

    class FactoryProcessServerElement  {

        use BreakStringInVars;

        private $processServerElements;

        public function __construct(){
            $this->processServerElements = ProcessServerElements::start(); // :: para acessar atributo/método static
        }   

        public function operation(){
            $this->processServerElements->setDocumentRoot($_SERVER['DOCUMENT_ROOT']);
            $this->processServerElements->setDocumentRoot($_SERVER['SERVER_NAME']);
            $this->processServerElements->sethttpHost($_SERVER['HTTP_HOST']);
            $this->processServerElements->setUri($_SERVER['REQUEST_URI']);

            $this->breakStringInVars($_SERVER['REQUEST_URI']);
            dd($this->processServerElements);

            
        }

    }

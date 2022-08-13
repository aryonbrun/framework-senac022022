<?php

    namespace App\FrameworkTools\Implementations\FactoryMethods;

    use App\FrameworkTools\Abstracts\FactoryMethods\AbstractFactoryMethods;
    use App\FrameworkTools\ProcessServerElements;

    class FactoryProcessServerElement extends AbstractFactoryMethods{

        private $processServerElements;

        public function __construct(){
            $this->processServerElements = ProcessServerElements::start(); // :: para acessar atributo/método static

        }

        public function operation(){
            $this->processServer->setDocumentRoot($_SERVER['DOCUMENT_ROOT']);
            $this->processServer->setDocumentRoot($_SERVER['SERVER_NAME']);
            dd($this->processServerElements);
        }

    }

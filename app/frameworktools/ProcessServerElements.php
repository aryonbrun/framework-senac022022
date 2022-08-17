<?php

namespace APP\FrameworkTools;


class ProcessServerElements{
    private static $instance;

    private $documentRoot;
    private $serverName;

    private function __construct(){ // por ser singleton o construtor é private
        // singleton
        // ele não será criado por aqui
        //throw new Exception("This class can not be started by new Proccess, only by start function");
        
    }

    public static function start(){
        if(!ProcessServerElements::$instance){ // :: é para acessar atributo static
            ProcessServerElements::$instance = new ProcessServerElements();
        }

        return ProcessServerElements::$instance;

    }
    
    public function setDocumentRoot($documentRoot){
        $this->documentRoot = $documentRoot;
    }

    public function getDocumentRoot($documentRoot){
        return $this->documentRoot;
    }

    public function setServername($serverName){
        $this->serverName = $serverName;
    }

    public function getServerName(){
        return $this->serverName;
    }

    public function sethttpHost($httpHost){
        $this->httpHost = $httpHost;
    }

    public function gethttpHost(){
        return $this->httpHost;
    }

    public function setUri($uri){
        $this->uri  = $uri;
    }

    public function getUri(){
        return $this->uri;
    }

    public function setVariable($variable){
        $this->variables = $variables;
    }

    public function getVariable(){
        return $this->variables;
    }
}
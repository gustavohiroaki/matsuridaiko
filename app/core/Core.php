<?php

class Core{
    private $fullUri;
    private $controller;
    private $method;
    private $parameters = array();

    function __construct(){
        $this->getUri();
    }
    
    function execFunc(){
        $funcPath = $this->getController();
        $funcObj = new $funcPath;
        
        call_user_func_array(array($funcObj,$this->getMethod()),$this->getParameters());
    }

    function getUri(){
        $this->fullUri = $_SERVER["PHP_SELF"];
        $this->fullUri = explode("index.php/",$this->fullUri);
        array_shift($this->fullUri);
        
        if($this->fullUri!==array()){
        $this->fullUri = explode("/",$this->fullUri[0]);
        
        
            if($this->fullUri[0]!==""){
                
                if(isset($this->fullUri[0])){
                $this->controller = ucfirst($this->fullUri[0]."Controller");
                array_shift($this->fullUri);
                }
                
                if(isset($this->fullUri[0])){
                $this->method = $this->fullUri[0];
                array_shift($this->fullUri);
                }
                
                
                $this->parameters = $this->fullUri;

            }
            
        }
        else{
            $this->controller = CONTROLLER_NAMESPACE.ucfirst(DEFAULT_CONTROLLER."Controller");
        }

    }

    function getController(){
        if(class_exists(CONTROLLER_NAMESPACE.$this->controller)){
            return CONTROLLER_NAMESPACE.$this->controller;
        }
        else{
            return CONTROLLER_NAMESPACE.ucfirst(DEFAULT_CONTROLLER."Controller");
        }
    }

    function getMethod(){
        
        if(method_exists(CONTROLLER_NAMESPACE.$this->controller,$this->method)){
            return $this->method;
        }
        else{
            return DEFAULT_METHOD;
        }
    }

    function getParameters(){
        return $this->parameters;
    }
}
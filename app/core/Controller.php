<?php

namespace app\core;

abstract class Controller{

    protected $viewName;
    protected $params;
    protected $needParam;

    protected function security(){
        session_start();

        if(!$_SESSION["id"]){
            session_destroy();
            header("location: /login");
        }

    }

    public function add_view($viewName){
        $this->viewName = $viewName;
    }

    public function add_params($params,$needParam){
        $this->params = $params;
        $this->needParam = $needParam;
    }






    public function load_head(){
        require 'app/views/head/'.$this->viewName.'.php';
    }

    public function load_body(){
        if($this->params !== null && $this->needParam !== 1){
            extract($this->params);
        }
        require 'app/views/body/'.$this->viewName.'.php';
    }

    public function load_script(){
        if(file_exists('app/views/script/'.$this->viewName.'.php')){
            include 'app/views/script/'.$this->viewName.'.php';
        }
    }






    public function master_interface($interfaceName,$interfaceParam=array()){
        extract($interfaceParam);
        require 'app/views/master/'.$interfaceName.'.php';
    }

}
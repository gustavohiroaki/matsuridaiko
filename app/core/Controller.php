<?php

namespace app\core;

abstract class Controller{

    protected $viewName;

    public function add_view($viewName){
        $this->viewName = $viewName;
    }

    public function load_head(){
        require 'app/views/head/'.$this->viewName.'.php';
    }

    public function load_body(){
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
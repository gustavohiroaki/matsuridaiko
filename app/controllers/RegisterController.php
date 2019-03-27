<?php

namespace app\controllers;

use app\core\Controller;

class RegisterController extends Controller{

    public function index(){
        
    }
    public function member(){
        session_start();
        
        if(!$_SESSION["id"]){
            session_destroy();
            header("location: /login");
        }

        $this->add_view("dashboard_registermember");
        $this->master_interface("dashboard");
    }

}
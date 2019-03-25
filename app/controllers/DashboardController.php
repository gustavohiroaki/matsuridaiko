<?php

namespace app\controllers;

use app\core\Controller;

class DashboardController extends Controller{
    public function index(){
        session_start();
        
        if(!$_SESSION["id"]){
            session_destroy();
            header("location: /login");
        }

        $this->add_view("dashboard_main");
        $this->master_interface("dashboard");
    }
}
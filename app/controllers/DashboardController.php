<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Basics;

class DashboardController extends Controller{
    public function index(){
        $this->security();

        $this->add_view("dashboard_main");
        $this->master_interface("dashboard");

    }

    
}
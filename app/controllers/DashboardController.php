<?php

namespace app\controllers;

use app\core\Controller;
// use app\models\Basics;
use app\models\ConsultModel;

class DashboardController extends Controller{
    public function index(){
        $this->security();
        $query = new ConsultModel;

        $this->add_view("dashboard_main");
        $this->master_interface("dashboard");

    }

    
}
<?php

namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;

class RegisterController extends Controller{

    public function index(){
        
    }
    public function member(){
        $this->security();

        $this->add_view("dashboard_registermember");
        $this->master_interface("dashboard");
    }

    public function sendMember(){
        $this->security();

        var_dump($_POST);
    }

}
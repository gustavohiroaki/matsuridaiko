<?php

namespace app\controllers;

use app\core\Controller;
use app\models\ConsultModel;

class ConsultController extends Controller{
    public function index(){

    }

    public function member(){
        $query = new ConsultModel;
        $data["members"] = $query->selectMembers();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }
    
    public function junior(){

    }

    public function shinjin(){

    }

    public function pastEvents(){
        $query = new ConsultModel();
        $data["pastEvents"] = $query->pastEvents();

        $this->add_params($data,0);
        $this->add_view("dashboard_consultPastEvents");
        $this->master_interface("dashboard");
    }
}
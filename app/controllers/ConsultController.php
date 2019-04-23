<?php

namespace app\controllers;

use app\core\Controller;
use app\models\ConsultModel;

class ConsultController extends Controller{
    public function index(){

    }

    public function allMembers(){
        $this->add_view("dashboard_consultAllMembers");
        $this->master_interface("dashboard");
    }

    public function member(){
        $member = new ConsultModel;
        $data["members"] = $member->selectMembers();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }
    
    public function junior(){
        $junior = new ConsultModel;
        $data["members"] = $junior->selectJuniors();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }

    public function shinjin(){
        $shinjin = new ConsultModel;
        $data["members"] = $shinjin->selectShinjins();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }

    public function pastEvents(){
        $query = new ConsultModel();
        $data["pastEvents"] = $query->pastEvents();

        $this->add_params($data,0);
        $this->add_view("dashboard_consultPastEvents");
        $this->master_interface("dashboard");
    }

    public function nextEvents(){
        $this->add_view("dashboard_consultNextEvents");
        $this->master_interface("dashboard");
    }
}
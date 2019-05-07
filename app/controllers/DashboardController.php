<?php

namespace app\controllers;

use app\core\Controller;

use app\models\DashboardModel;

class DashboardController extends Controller{

    public function index(){
        $this->security();
        $query = new DashboardModel;

        $data["events"] = $query->selectEvents();
        $data["message"] = $query->selectMessages();
        $data["training"] = $query->selectTraining();

        $this->add_params($data,0);
        $this->add_view("dashboard_main");
        $this->master_interface("dashboard");

    }

    public function tableEvents(){
        $this->security();
        $query = new DashboardModel;

        return $query->tableEvents();
    }

    public function tableMessages(){
        $this->security();
        $query = new DashboardModel;
        return $query->tableMessages();
    }

    public function tableTraining(){
        $this->security();
        $query = new DashboardModel;
        return $query->tableTraining();
    }

    
}

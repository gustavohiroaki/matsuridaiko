<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Basics;
use app\models\ConsultModel;

class ConsultController extends Controller{
    public function index(){
        $this->security();
    }

    public function allMembers(){
        $this->security();
        $filter = new Basics;
        $select = new ConsultModel;
        $data["filter_branch"] = $filter->select("branch");
        $data["all_members"] =$select->selectAllMembers();

        $this->add_params($data,0);
        $this->add_view("dashboard_consultAllMembers");
        $this->master_interface("dashboard");
    }

    public function filterAllMembers(){
        $this->security();
        $name = isset($_POST["name"])? strip_tags(filter_input(INPUT_POST,"name")):NULL;
        $filter_branch = isset($_POST["filter_branch"])? strip_tags(filter_input(INPUT_POST,"filter_branch")):NULL;
    
        $filter = new ConsultModel;
        echo($filter->filterAllMembers($name,$filter_branch));
    }

    public function member(){
        $this->security();
        $member = new ConsultModel;
        $data["members"] = $member->selectMembers();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }
    
    public function junior(){
        $this->security();
        $junior = new ConsultModel;
        $data["members"] = $junior->selectJuniors();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }

    public function shinjin(){
        $this->security();
        $shinjin = new ConsultModel;
        $data["members"] = $shinjin->selectShinjins();


        $this->add_params($data,0);
        $this->add_view("dashboard_consultmember");
        $this->master_interface("dashboard");
    }

    public function allEvents(){
        $this->security();
        $query = new ConsultModel;
        $data["events"] = $query->selectAllEvents();

        $this->add_params($data,0);
        $this->add_view("dashboard_consultEvents");
        $this->master_interface("dashboard");
    }

    public function filterAllEvents(){
        $this->security();

        $name = isset($_POST["name"])? strip_tags(filter_input(INPUT_POST,"name")):NULL;
        $date = isset($_POST["date"])? strip_tags(filter_input(INPUT_POST,"date")):NULL;
        if($date!==""){
            $date = formatDate($date,"USA");
        }
        $filter = new ConsultModel;
        echo($filter->filterAllEvents($name,$date));
    }

    public function pastEvents(){
        $this->security();
        $query = new ConsultModel();
        $data["events"] = $query->pastEvents();

        $this->add_params($data,0);
        $this->add_view("dashboard_consultEvents");
        $this->master_interface("dashboard");
    }

    public function nextEvents(){
        $this->security();

        $this->add_view("dashboard_consultNextEvents");
        $this->master_interface("dashboard");
    }

    public function message(){
        $this->security();
        $query = new ConsultModel;
        $data["messages"] = $query->selectMessages();
        
        $this->add_viewTitle("Consulta de Recados");
        $this->add_params($data,0);
        $this->add_view("dashboard_consultMessages");
        $this->master_interface("dashboard");
    }

    public function specificMessage(){
        $this->security();
        if(isset($_POST["id"])){
            $query = new ConsultModel;
            echo json_encode($query->selectSpecificMessage($_POST["id"]));
        }
        else{
            
        }

    }

    public function training(){
        $this->security();
        $query = new ConsultModel;
        $data["training"] = $query->selectTraining();
        
        $this->add_viewTitle("Consulta de Treinos");
        $this->add_params($data,0);
        $this->add_view("dashboard_consultTraining");
        $this->master_interface("dashboard");
    }
}
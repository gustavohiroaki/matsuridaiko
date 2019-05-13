<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Basics;
use app\models\ConsultModel;

class DetailsController extends Controller{
    
    function index(){

    }

    public function member($memberID){
        $this->security();
        $member_info = new ConsultModel;
        $data["member_info"] = $member_info->selectAllMembersType($memberID)[0];

        $query = new Basics;
        $data["member_type"] = $query->select("member_type");
        $data["member_permission"] = $query->select("permission_user");
        $data["member_branch"] = $query->select("branch");

        $this->add_viewTitle("Detalhes de Integrantes");
        $this->add_params($data,0);
        $this->add_view("dashboard_details_member");
        $this->master_interface("dashboard");
    }

    public function event($eventID){
        $this->security();
        $query = new ConsultModel;

        $data["event"] = $query->selectEvent($eventID);

        $basics = new Basics;
        $data["event_branch"] = $basics->select("branch");
        $qrydata = $data["event"][0]->id_event;
        $data["select_branch"] = $query->selectIdEventBranch($qrydata);

        // Convert Object to Normal array
        $data["select_branch"] = json_decode(json_encode($data["select_branch"]), True);


        $this->add_viewTitle("Detalhes de Evento");
        $this->add_params($data,0);
        $this->add_view("dashboard_details_event");
        $this->master_interface("dashboard");
    }


}

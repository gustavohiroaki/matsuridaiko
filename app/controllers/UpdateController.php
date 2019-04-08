<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Basics;
use app\models\ConsultModel;

class UpdateController extends Controller{
    public function index(){
        echo "Index de Controller de Update";
    }

    public function member($memberID){
        $this->security();
        $member_info = new ConsultModel;
        $data["member_info"] = $member_info->selectMembers($memberID)[0];

        $query = new Basics;
        $data["member_type"] = $query->select("member_type");
        $data["member_permission"] = $query->select("permission_user");
        $data["member_branch"] = $query->select("branch");

        $this->add_viewTitle("Alteração de Integrantes");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_member");
        $this->master_interface("dashboard");
    }

}
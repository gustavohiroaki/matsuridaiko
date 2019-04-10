<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Basics;
use app\models\ConsultModel;
use app\models\UpdateModel;

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

    public function updateMember(){
        $this->security();

        $id_member              = isset($_POST["id_member"])? strip_tags(filter_input(INPUT_POST,"id_member")):NULL;
        $name_member            = isset($_POST["name_member"])? strip_tags(filter_input(INPUT_POST,"name_member")):NULL;
        $username_member        = isset($_POST["username_member"])? strip_tags(filter_input(INPUT_POST,"username_member")):NULL;
        $id_type                = isset($_POST["id_type"])? strip_tags(filter_input(INPUT_POST,"id_type")):NULL;
        $pass_member            = isset($_POST["pass_member"])? strip_tags(filter_input(INPUT_POST,"pass_member")):NULL;
        $permission_member      = isset($_POST["permission_member"])? strip_tags(filter_input(INPUT_POST,"permission_member")):NULL;
        $member_branch          = isset($_POST["member_branch"])? strip_tags(filter_input(INPUT_POST,"member_branch")):NULL;
        $entrydate_member       = isset($_POST["entrydate_member"])? strip_tags(filter_input(INPUT_POST,"entrydate_member")):NULL;
        $birth_member           = isset($_POST["birth_member"])? strip_tags(filter_input(INPUT_POST,"birth_member")):NULL;
        $tel_member             = isset($_POST["tel_member"])? strip_tags(filter_input(INPUT_POST,"tel_member")):NULL;
        $rg_member              = isset($_POST["rg_member"])? strip_tags(filter_input(INPUT_POST,"rg_member")):NULL;
        $zip_member             = isset($_POST["zip_member"])? strip_tags(filter_input(INPUT_POST,"zip_member")):NULL;
        $state_member           = isset($_POST["state_member"])? strip_tags(filter_input(INPUT_POST,"state_member")):NULL;
        $city_member            = isset($_POST["city_member"])? strip_tags(filter_input(INPUT_POST,"city_member")):NULL;
        $neighboorhood_member   = isset($_POST["neighboorhood_member"])? strip_tags(filter_input(INPUT_POST,"neighboorhood_member")):NULL;
        $street_member          = isset($_POST["street_member"])? strip_tags(filter_input(INPUT_POST,"street_member")):NULL;
        $complement_member      = isset($_POST["complement_member"])? strip_tags(filter_input(INPUT_POST,"complement_member")):NULL;
        $status_member          = isset($_POST["status_member"])? strip_tags(filter_input(INPUT_POST,"status_member")):NULL;
        
        
        $allDatas = array(
            "id_member"             =>      $id_member,
            "name_member"           =>      $name_member,
            "username_member"       =>      $username_member,
            "id_type"               =>      $id_type,
            "pass_member"           =>      $pass_member,
            "permission_member"     =>      $permission_member,
            "id_branch"             =>      $member_branch,
            "entrydate_member"      =>      formatDate($entrydate_member,"USA"),
            "birth_member"          =>      formatDate($birth_member,"USA"),
            "tel_member"            =>      $tel_member,
            "rg_member"             =>      $rg_member,
            "zip_member"            =>      $zip_member,
            "state_member"          =>      $state_member,
            "city_member"           =>      $city_member,
            "neighboorhood_member"  =>      $neighboorhood_member,
            "street_member"         =>      $street_member,
            "complement_member"     =>      $complement_member,
            "status_member"         =>      $status_member
        );

        $update = new UpdateModel;
        $update->updateMember($allDatas);
    }

}
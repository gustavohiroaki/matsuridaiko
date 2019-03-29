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

        $name_member            = isset($_POST["name_member"])? strip_tags(filter_input(INPUT_POST,"name_member")):NULL;
        $username_member        = isset($_POST["username_member"])? strip_tags(filter_input(INPUT_POST,"username_member")):NULL;
        $type_member            = isset($_POST["type_member"])? strip_tags(filter_input(INPUT_POST,"type_member")):NULL;
        $pass_member            = isset($_POST["pass_member"])? strip_tags(filter_input(INPUT_POST,"pass_member")):NULL;
        $permission_member      = isset($_POST["permission_member"])? strip_tags(filter_input(INPUT_POST,"permission_member")):NULL;
        $id_branch              = isset($_POST["id_branch"])? strip_tags(filter_input(INPUT_POST,"id_branch")):NULL;
        $entrydate_member       = isset($_POST["entrydate_member"])? strip_tags(filter_input(INPUT_POST,"entrydate_member")):NULL;
        $birth_member           = isset($_POST["birth_member"])? strip_tags(filter_input(INPUT_POST,"birth_member")):NULL;
        $tel_member             = isset($_POST["tel_member"])? strip_tags(filter_input(INPUT_POST,"tel_member")):NULL;
        $rg_member              = isset($_POST["rg_member"])? strip_tags(filter_input(INPUT_POST,"rg_member")):NULL;
        $zip_member             = isset($_POST["zip_member"])? strip_tags(filter_input(INPUT_POST,"zip_member")):NULL;
        $state_member           = isset($_POST["state_member"])? strip_tags(filter_input(INPUT_POST,"state_member")):NULL;
        $city_member            = isset($_POST["city_member"])? strip_tags(filter_input(INPUT_POST,"city_member")):NULL;
        $neighboorhood_member   = isset($_POST["neighboorhood_member"])? strip_tags(filter_input(INPUT_POST,"neighboorhood_member")):NULL;
        $complement_member      = isset($_POST["complement_member"])? strip_tags(filter_input(INPUT_POST,"complement_member")):NULL;
        $status_member          = isset($_POST["status_member"])? strip_tags(filter_input(INPUT_POST,"status_member")):NULL;
        
        
        $allDatas = array(
            "name_member"           =>      $name_member,
            "username_member"       =>      $username_member,
            "type_member"           =>      $type_member,
            "pass_member"           =>      $pass_member,
            "permission_member"     =>      $permission_member,
            "id_branch"             =>      $id_branch,
            "entrydate_member"      =>      $entrydate_member,
            "birth_member"          =>      $birth_member,
            "tel_member"            =>      $tel_member,
            "rg_member"             =>      $rg_member,
            "zip_member"            =>      $zip_member,
            "state_member"          =>      $state_member,
            "city_member"           =>      $city_member,
            "neighboorhood_member"  =>      $neighboorhood_member,
            "complement_member"     =>      $complement_member,
            "status_member"         =>      $status_member
        );
        // dd($allDatas);

        $insert = new RegisterModel;
        $insert->registerMember($allDatas);
    }

}
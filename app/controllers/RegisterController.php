<?php

namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
use app\models\Basics;
use app\models\ConsultModel;

class RegisterController extends Controller{

    public function index(){
        $this->security();
    }
    public function member(){
        $this->security();
        $this->securityAccessPage(500);

        $query = new Basics;
        $data["member_type"] = $query->select("member_type");
        $data["member_permission"] = $query->select("permission_user");
        $data["member_branch"] = $query->select("branch");

        $this->add_viewTitle("Registro de novo membro");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_member");
        $this->master_interface("dashboard");
    }

    public function sendMember(){
        $this->security();
        $this->securityAccessPage(500);

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


        $insert = new RegisterModel;
        $insert->registerMember($allDatas);
    }

    public function event(){
        $this->security();
        $this->securityAccessPage(1000);

        
        $query = new Basics;
        $data["event_branch"] = $query->select("branch");

        $this->add_viewTitle("Cadastro de Eventos");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_event");
        $this->master_interface("dashboard");
    }

    public function sendEvent(){
        $this->security();
        $this->securityAccessPage(1000);

        $event_branch[]         =       $_POST["event_branch"];

        $name_event             =       isset($_POST["name_event"])? strip_tags(filter_input(INPUT_POST,"name_event")):NULL;
        $date_init              =       isset($_POST["date_init"])? strip_tags(filter_input(INPUT_POST,"date_init")):NULL;
        $hour_init              =       isset($_POST["hour_init"])? strip_tags(filter_input(INPUT_POST,"hour_init")):NULL;
        $date_fin               =       isset($_POST["date_fin"])? strip_tags(filter_input(INPUT_POST,"date_fin")):NULL;
        $hour_fin               =       isset($_POST["hour_fin"])? strip_tags(filter_input(INPUT_POST,"hour_fin")):NULL;
        $numbermember_event     =       isset($_POST["numbermember_event"])? strip_tags(filter_input(INPUT_POST,"numbermember_event")):NULL;
        $zip_event              =       isset($_POST["zip_event"])? strip_tags(filter_input(INPUT_POST,"zip_event")):NULL;
        $state_event            =       isset($_POST["state_event"])? strip_tags(filter_input(INPUT_POST,"state_event")):NULL;
        $city_event             =       isset($_POST["city_event"])? strip_tags(filter_input(INPUT_POST,"city_event")):NULL;
        $neighboorhood_event    =       isset($_POST["neighboorhood_event"])? strip_tags(filter_input(INPUT_POST,"neighboorhood_event")):NULL;
        $street_event           =       isset($_POST["street_event"])? strip_tags(filter_input(INPUT_POST,"street_event")):NULL;
        $complement_event       =       isset($_POST["complement_event"])? strip_tags(filter_input(INPUT_POST,"complement_event")):NULL;
        $annotation_event       =       isset($_POST["annotation_event"])? strip_tags(filter_input(INPUT_POST,"annotation_event")):NULL;
        $responsible_event      =       isset($_POST["responsible_event"])? strip_tags(filter_input(INPUT_POST,"responsible_event")):NULL;
        $status_event           =       isset($_POST["status_event"])? strip_tags(filter_input(INPUT_POST,"status_event")):NULL;

        $date_init = formatDate($date_init,"USA");
        $date_fin  = formatDate($date_fin,"USA");

        $allDatas = array(
            "name_event"=>$name_event,
            "date_init"=>$date_init,
            "hour_init"=>$hour_init,
            "date_fin"=>$date_fin,
            "hour_fin"=>$hour_fin,
            "dateinit_event"=>$date_init." ".$hour_init,
            "datefin_event"=>$date_fin." ".$hour_fin,
            "numbermember_event"=>$numbermember_event,
            "zip_event"=>$zip_event,
            "state_event"=>$state_event,
            "city_event"=>$city_event,
            "neighboorhood_event"=>$neighboorhood_event,
            "street_event"=>$street_event,
            "complement_event"=>$complement_event,
            "annotation_event"=>$annotation_event,
            "responsible_event"=>$responsible_event,
            "status_event"=>$status_event
        );


        $insert = new RegisterModel;
        $insert->registerEvent($allDatas);

        $query = new ConsultModel;
        $lastID = $query->selectLastEvent();

        if($event_branch[0]!==""){
            foreach($event_branch[0] as $count){
                $query = new RegisterModel;
                $query->registerBranchEvent((int)$count,(int)$lastID->id_event);
            }
        }
    }

    public function music(){
        $this->security();

        $this->add_viewTitle("Cadastro de Música");
        $this->add_view("dashboard_form_music");
        $this->master_interface("dashboard");
    }

    public function message(){
        $this->security();
        $this->securityAccessPage(500);

        $query = new Basics;
        $data["message_branch"] = $query->select("branch");

        $this->add_viewTitle("Cadastro de Recados");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_message");
        $this->master_interface("dashboard");
    }

    public function sendMessage(){
        $this->security();
        $this->securityAccessPage(500);

        $date_init = isset($_POST["date_init"])? strip_tags(filter_input(INPUT_POST,"date_init")):NULL;
        $date_fin = isset($_POST["date_fin"])? strip_tags(filter_input(INPUT_POST,"date_fin")):NULL;
        $message = isset($_POST["message"])? strip_tags(filter_input(INPUT_POST,"message")):NULL;
        $message_branch = $_POST["message_branch"];
        $message_by = $_SESSION["name"];

        $date_init = formatDate($date_init,"USA");
        $date_fin = formatDate($date_fin,"USA");

        $allDatas = array(
            'date_init'=>$date_init,
            'date_fin'=>$date_fin,
            'message'=>$message,
            'message_by'=>$message_by
        );

        $query = new RegisterModel;
        $query->registerMessage($allDatas);

        $query = new ConsultModel;
        $lastID = $query->selectLastMessage();

        if($message_branch!==""){
            foreach($message_branch as $count){

                $query = new RegisterModel;
                $query->registerBranchMessage((int)$lastID->id_message,(int)$count);
            }
        }
    }

    public function training(){
        $this->security();
        $this->securityAccessPage(500);

        $query = new Basics;
        $data["training_branch"] = $query->select("branch");

        $this->add_viewTitle("Cadastro de Treinos");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_training");
        $this->master_interface("dashboard");
    }

    public function sendTraining(){
        $this->security();
        $this->securityAccessPage(500);

        $place_training = isset($_POST["place_training"])? strip_tags(filter_input(INPUT_POST,"place_training")):NULL;
        $date_training = isset($_POST["date_training"])? strip_tags(filter_input(INPUT_POST,"date_training")):NULL;
        $organizer_training = isset($_POST["organizer_training"])? strip_tags(filter_input(INPUT_POST,"organizer_training")):NULL;
        $annotation_training = isset($_POST["annotation_training"])? strip_tags(filter_input(INPUT_POST,"annotation_training")):NULL;
        $training_branch = $_POST["training_branch"];

        $date_training = formatDate($date_training,"USA");

        $allDatas = array(
            'date_training'=>$date_training,
            'place_training'=>$place_training,
            'annotation_training'=>$annotation_training,
            'organizer_training'=>$organizer_training
        );

        $query = new RegisterModel;
        $query->registerTraining($allDatas);

        $query = new ConsultModel;
        $lastID = $query->selectLastTraining();

        if($training_branch!==""){
            foreach($training_branch as $count){

                $query = new RegisterModel;
                $query->registerBranchTraining((int)$lastID->id_training,(int)$count);
            }
        }


    }

}
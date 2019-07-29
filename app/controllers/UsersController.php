<?php

namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
use app\models\Basics;
use app\models\ConsultModel;
use app\models\DeleteModel;
use app\models\UpdateModel;


class UsersController extends Controller {

		public function index(){
		
	}
	
		public function register(){
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

		public function consult(){
			$this->security();
			$filter = new Basics;
			$select = new ConsultModel;
			$data["filter_branch"] = $filter->select("branch");
			$data["all_members"] =$select->selectAllMembers();

			$this->add_params($data,0);
			$this->add_view("dashboard_consultAllMembers");
			$this->master_interface("dashboard");
	}
	
		public function filter(){
        $this->security();
        $name = isset($_POST["name"])? strip_tags(filter_input(INPUT_POST,"name")):NULL;
        $filter_branch = isset($_POST["filter_branch"])? strip_tags(filter_input(INPUT_POST,"filter_branch")):NULL;
    
        $filter = new ConsultModel;
        echo($filter->filterAllMembers($name,$filter_branch));
    }
	
		public function delete(){
			$this->security();

			$delete = new DeleteModel;
			// dd((int)$_POST["id"]);
			$delete->deleteMember((int)$_POST["id"]);
    }
	
		public function filterAndInsert(){
			$this->security();
			$this->securityAccessPage(500);

// 			$id_member              = isset($_POST["id_member"])? strip_tags(filter_input(INPUT_POST,"id_member")):NULL;
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
// 					"id_member"             =>      $id_member,
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

			if($insert->registerMember($allDatas)){
				echo "Integrante inserido com sucesso!";
			}
			else{
				echo "Falha na inserção de novo Integrante";
			}
			
	}
	
		public function updateForm($memberID){
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

		public function filterAndUpdate(){
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
			
			if($update->updateMember($allDatas)){
				echo "Dados do integrante atualizados com sucesso!";
			}
			else{
				echo "Falha na atualização de dados do integrante!";
			}
		}
	
	    public function details($memberID){
        $this->security();
        $member_info = new ConsultModel;
        $data["member_info"] = $member_info->selectAllMembers($memberID)[0];

        $query = new Basics;
        $data["member_type"] = $query->select("member_type");
        $data["member_permission"] = $query->select("permission_user");
        $data["member_branch"] = $query->select("branch");

        $this->add_viewTitle("Detalhes de Integrantes");
        $this->add_params($data,0);
        $this->add_view("dashboard_details_member");
        $this->master_interface("dashboard");
    }
	
}



?>
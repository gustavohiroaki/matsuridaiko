<?php
namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
use app\models\Basics;
use app\models\ConsultModel;
use app\models\DeleteModel;
use app\models\UpdateModel;

class MessagesController extends Controller {

	public function index(){

	}
		
	public function register(){
			$this->security();
			$this->securityAccessPage(500);

			$query = new Basics;
			$data["message_branch"] = $query->select("branch");

			$this->add_viewTitle("Cadastro de Recados");
			$this->add_params($data,0);
			$this->add_view("dashboard_form_message");
			$this->master_interface("dashboard");
	}
	
	public function consult(){
		$this->security();
		$query = new ConsultModel;
		$data["messages"] = $query->selectMessages();

		$this->add_viewTitle("Consulta de Recados");
		$this->add_params($data,0);
		$this->add_view("dashboard_consultMessages");
		$this->master_interface("dashboard");
}
	
	public function delete(){
		$this->security();
		$delete = new DeleteModel;

		$delete->deleteMessage((int)$_POST["id"]);
	}

	public function filterAndInsert(){
		$this->security();
		$this->securityAccessPage(500);

		$date_init = isset($_POST["date_init"])? strip_tags(filter_input(INPUT_POST,"date_init")):NULL;
		$date_fin = isset($_POST["date_fin"])? strip_tags(filter_input(INPUT_POST,"date_fin")):NULL;
		$message_title = isset($_POST["message_title"])? strip_tags(filter_input(INPUT_POST,"message_title")):NULL;
		$message = isset($_POST["message"])? strip_tags(filter_input(INPUT_POST,"message")):NULL;
		$message_branch = $_POST["message_branch"];
		$message_by = $_SESSION["name"];

		$date_init = formatDate($date_init,"USA");
		$date_fin = formatDate($date_fin,"USA");

		$allDatas = array(
				'date_init'=>$date_init,
				'date_fin'=>$date_fin,
				'message_title'=>$message_title,
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
	
	public function selectSpecificMessage(){
		$this->security();
		if(isset($_POST["id"])){
				$query = new ConsultModel;
				echo json_encode($query->selectSpecificMessage($_POST["id"]));
		}
		else{

		}

	}
	
	public function updateForm($id_message){
        $this->security();
        $query = new ConsultModel;

        $data["message"] = $query->selectMessages($id_message);
        
        $basics = new Basics;
        $data["message_branch"] = $basics->select("branch");
        $qrydata = $data["message"][0]->id_message;
        $data["select_branch"] = $query->selectIdMessageBranch($qrydata);

        // Convert Object to Normal array
        $data["select_branch"] = json_decode(json_encode($data["select_branch"]), True);

        $this->add_viewTitle("Alteração de Recado");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_message");
        $this->master_interface("dashboard");
    }

	public function filterAndUpdate(){
        $this->security();

        $id_message = isset($_POST["id_message"])? strip_tags(filter_input(INPUT_POST,"id_message")):NULL;
        $date_init = isset($_POST["date_init"])? strip_tags(filter_input(INPUT_POST,"date_init")):NULL;
        $date_fin = isset($_POST["date_fin"])? strip_tags(filter_input(INPUT_POST,"date_fin")):NULL;
        $message_title = isset($_POST["message_title"])? strip_tags(filter_input(INPUT_POST,"message_title")):NULL;
        $message = isset($_POST["message"])? strip_tags(filter_input(INPUT_POST,"message")):NULL;
        $message_branch = $_POST["message_branch"];
        $message_by = $_SESSION["name"];

        $date_init = formatDate($date_init,"USA");
        $date_fin = formatDate($date_fin,"USA");

        $allDatas = array(
						'id_message'=>$id_message,
            'date_init'=>$date_init,
            'date_fin'=>$date_fin,
            'message_title'=>$message_title,
            'message'=>$message,
            'message_by'=>$message_by
        );
		
		
    	try{  
        $delete = new DeleteModel;
        $delete->deleteMessage_branch($id_message);

        $query = new UpdateModel;
        $query->updateMessage($allDatas);
				}
				catch (Exception $e) {
					echo 'Caught exception: ',  $e->getMessage(), "\n";
					return false;
				}

        if($message_branch){
            foreach($message_branch as $count){

                $query = new RegisterModel;
                $query->registerBranchMessage((int)$id_message,(int)$count);
            }
        }
    }
		
}


?>
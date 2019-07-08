<?php
namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
use app\models\Basics;
use app\models\ConsultModel;
use app\models\DeleteModel;
use app\models\UpdateModel;

class TrainingController extends Controller {

	public function index(){

	}
		
	public function register(){
		$this->security();
		$this->securityAccessPage(500);

		$query = new Basics;
		$data["training_branch"] = $query->select("branch");

		$this->add_viewTitle("Cadastro de Treinos");
		$this->add_params($data,0);
		$this->add_view("dashboard_form_training");
		$this->master_interface("dashboard");
	}
	
	public function consult(){
			$this->security();
			$query = new ConsultModel;
			$data["training"] = $query->selectTraining();

			$this->add_viewTitle("Consulta de Treinos");
			$this->add_params($data,0);
			$this->add_view("dashboard_consultTraining");
			$this->master_interface("dashboard");
	}
	
	public function delete(){
		$this->security();
		$delete = new DeleteModel;

		$delete->deleteTraining((int)$_POST["id"]);
	}
	
	public function filterAndInsert(){
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
	
	public function updateForm($id_training){
        $this->security();
        $query = new ConsultModel;

        $data["training"] = $query->selectTraining($id_training);

        $basics = new Basics;
        $data["training_branch"] = $basics->select("branch");
        $qrydata = $data["training"][0]->id_training;
        $data["select_branch"] = $query->selectIdTrainingBranch($qrydata);

        // Convert Object to Normal array
        $data["select_branch"] = json_decode(json_encode($data["select_branch"]), True);

        $this->add_viewTitle("Alteração de Recado");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_training");
        $this->master_interface("dashboard");
    }

	public function filterAndUpdate(){
        $id_training = isset($_POST["id_training"])? strip_tags(filter_input(INPUT_POST,"id_training")):NULL;
        $date_training = isset($_POST["date_training"])? strip_tags(filter_input(INPUT_POST,"date_training")):NULL;
        $place_training = isset($_POST["place_training"])? strip_tags(filter_input(INPUT_POST,"place_training")):NULL;
        $organizer_training = isset($_POST["organizer_training"])? strip_tags(filter_input(INPUT_POST,"organizer_training")):NULL;
        $annotation_training = isset($_POST["annotation_training"])? strip_tags(filter_input(INPUT_POST,"annotation_training")):NULL;
        $training_branch = $_POST["training_branch"];

        $date_training = formatDate($date_training,"USA");

        $allDatas = array(
            'date_training'=>$date_training,
            'place_training'=>$place_training,
            'organizer_training'=>$organizer_training,
            'annotation_training'=>$annotation_training,
            'id_training'=>$id_training
        );
				try{
        $delete = new DeleteModel;
        $delete->deleteTraining_branch($id_training);

        $query = new UpdateModel;
        $query->updateTraining($allDatas);
				}
				catch (Exception $e) {
					echo 'Caught exception: ',  $e->getMessage(), "\n";
					return false;
				}


        if($training_branch){
            foreach($training_branch as $count){

                $query = new RegisterModel;
                $query->registerBranchTraining((int)$id_training,(int)$count);
            }
        }

    }
		
}


?> 
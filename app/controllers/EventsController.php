<?php
namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
use app\models\Basics;
use app\models\ConsultModel;
use app\models\DeleteModel;
use app\models\UpdateModel;

class EventsController extends Controller {

	public function index(){

	}
		
	public function register(){
		$this->security();
		$this->securityAccessPage(1000);


		$query = new Basics;
		$data["event_branch"] = $query->select("branch");

		$this->add_viewTitle("Cadastro de Eventos");
		$this->add_params($data,0);
		$this->add_view("dashboard_form_event");
		$this->master_interface("dashboard");
	}
	
	public function consultAll(){
		$this->security();
		$query = new ConsultModel;
		$data["events"] = $query->selectAllEvents();

		$this->add_params($data,0);
		$this->add_view("dashboard_consultEvents");
		$this->master_interface("dashboard");
	}
	
	public function consultPast(){
		$this->security();
		$query = new ConsultModel();
		$data["events"] = $query->pastEvents();

		$this->add_params($data,0);
		$this->add_view("dashboard_consultEvents");
		$this->master_interface("dashboard");
	}
	
	public function consultNext(){
		$this->security();

		$this->add_view("dashboard_consultNextEvents");
		
		$this->master_interface("dashboard");
	}
	
	public function delete(){
		$this->security();
		
		$delete = new DeleteModel;

		$delete->deleteEvent((int)$_POST["id"]);
	}
	
	public function filter(){
		$this->security();

		$name = isset($_POST["name"])? strip_tags(filter_input(INPUT_POST,"name")):NULL;
		$date = isset($_POST["date"])? strip_tags(filter_input(INPUT_POST,"date")):NULL;
		if($date!==""){
				$date = formatDate($date,"USA");
		}
		$filter = new ConsultModel;
		echo($filter->filterAllEvents($name,$date));
	}
	
	public function filterAndInsert(){
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
	
	public function updateForm($eventID){
        $this->security();
        $query = new ConsultModel;

        $data["event"] = $query->selectEvent($eventID);

        $basics = new Basics;
        $data["event_branch"] = $basics->select("branch");
        $qrydata = $data["event"][0]->id_event;
        $data["select_branch"] = $query->selectIdEventBranch($qrydata);

        // Convert Object to Normal array
        $data["select_branch"] = json_decode(json_encode($data["select_branch"]), True);


        $this->add_viewTitle("Alteração de Evento");
        $this->add_params($data,0);
        $this->add_view("dashboard_form_event");
        $this->master_interface("dashboard");
    }

	public function filterAndUpdate(){
        $this->security();
        $id_event               =       isset($_POST["id_event"])? strip_tags(filter_input(INPUT_POST,"id_event")):NULL;
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
        $event_branch           =       $_POST["event_branch"];

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
            "status_event"=>$status_event,
            "id_event"=>$id_event
        );

        try{
					$delete = new DeleteModel;
					$delete->deleteMessage_branch($id_event);

					$query = new UpdateModel;
					$query->updateEvent($allDatas);
				}
				catch (Exception $e) {
					echo 'Caught exception: ',  $e->getMessage(), "\n";
					return false;
				}

        if($event_branch){
            foreach($event_branch as $count){

                $query = new RegisterModel;
                $query->registerBranchEvent((int)$id_event,(int)$count);
            }
        }
    }
	
	    public function details($eventID){
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


?>
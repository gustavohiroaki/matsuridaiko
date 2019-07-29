<?php

namespace app\models;

use app\core\Model;


class UpdateModel extends Model{
	public function __construct(){
		parent::__construct();
	}	

	public function updateMember($allData=array()){
		$sql = "UPDATE members_rkmd SET name_member=:name_member, username_member=:username_member, id_type=:id_type, pass_member=:pass_member, permission_member=:permission_member, id_branch=:id_branch, entrydate_member=:entrydate_member, birth_member=:birth_member, tel_member=:tel_member, rg_member=:rg_member, zip_member=:zip_member, state_member=:state_member, city_member=:city_member, neighboorhood_member=:neighboorhood_member, street_member=:street_member, complement_member=:complement_member, status_member=:status_member WHERE id_member=:id_member";

		$update = $this->db->prepare($sql);

		if($update->execute($allData)){
			return true;
		}
		else{
			return false;
		}
		
	}

// 	public function updateJunior($allData=array()){
// 		$sql = "UPDATE members_rkmd SET name_member=:name_member, username_member=:username_member, id_type=:id_type, pass_member=:pass_member, permission_member=:permission_member, id_branch=:id_branch, entrydate_member=:entrydate_member, birth_member=:birth_member, tel_member=:tel_member, rg_member=:rg_member, zip_member=:zip_member, state_member=:state_member, city_member=:city_member, neighboorhood_member=:neighboorhood_member, street_member=:street_member, complement_member=:complement_member, status_member=:status_member WHERE id_member=:id_member";

// 		$update = $this->db->prepare($sql);

// 		$update->execute($allData);
// 	}

// 	public function updateShinjin($allData=array()){
// 		$sql = "UPDATE members_rkmd SET name_member=:name_member, username_member=:username_member, id_type=:id_type, pass_member=:pass_member, permission_member=:permission_member, id_branch=:id_branch, entrydate_member=:entrydate_member, birth_member=:birth_member, tel_member=:tel_member, rg_member=:rg_member, zip_member=:zip_member, state_member=:state_member, city_member=:city_member, neighboorhood_member=:neighboorhood_member, street_member=:street_member, complement_member=:complement_member, status_member=:status_member WHERE id_member=:id_member";

// 		$update = $this->db->prepare($sql);

// 		$update->execute($allData);
// 	}

	public function updateEvent($allData=array()){
		$sql = "UPDATE events SET name_event=:name_event,date_init=:date_init,hour_init=:hour_init,date_fin=:date_fin,hour_fin=:hour_fin,dateinit_event=:dateinit_event,datefin_event=:datefin_event,numbermember_event=:numbermember_event,zip_event=:zip_event,state_event=:state_event,city_event=:city_event,neighboorhood_event=:neighboorhood_event,street_event=:street_event,complement_event=:complement_event,annotation_event=:annotation_event,responsible_event=:responsible_event,status_event=:status_event WHERE id_event=:id_event";

		$update = $this->db->prepare($sql);

		$update->execute($allData);
	}

	public function updateMessage($allData=array()){
		$sql = "UPDATE messages SET date_init=:date_init,date_fin=:date_fin,message_title=:message_title,message=:message,message_by=:message_by WHERE id_message=:id_message";

		$update = $this->db->prepare($sql);

		$update->execute($allData);
	}

	public function updateTraining($allDatas=array()){
		$sql = "UPDATE next_training SET date_training=:date_training,place_training=:place_training,organizer_training=:organizer_training,annotation_training=:annotation_training WHERE id_training=:id_training";

		$update = $this->db->prepare($sql);

		$update->execute($allDatas);
	}
}
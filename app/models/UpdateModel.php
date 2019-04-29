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

		$update->execute($allData);
	}

	public function updateJunior($allData=array()){
		$sql = "UPDATE members_rkmd SET name_member=:name_member, username_member=:username_member, id_type=:id_type, pass_member=:pass_member, permission_member=:permission_member, id_branch=:id_branch, entrydate_member=:entrydate_member, birth_member=:birth_member, tel_member=:tel_member, rg_member=:rg_member, zip_member=:zip_member, state_member=:state_member, city_member=:city_member, neighboorhood_member=:neighboorhood_member, street_member=:street_member, complement_member=:complement_member, status_member=:status_member WHERE id_member=:id_member";

		$update = $this->db->prepare($sql);

		$update->execute($allData);
	}

	public function updateShinjin($allData=array()){
		$sql = "UPDATE members_rkmd SET name_member=:name_member, username_member=:username_member, id_type=:id_type, pass_member=:pass_member, permission_member=:permission_member, id_branch=:id_branch, entrydate_member=:entrydate_member, birth_member=:birth_member, tel_member=:tel_member, rg_member=:rg_member, zip_member=:zip_member, state_member=:state_member, city_member=:city_member, neighboorhood_member=:neighboorhood_member, street_member=:street_member, complement_member=:complement_member, status_member=:status_member WHERE id_member=:id_member";

		$update = $this->db->prepare($sql);

		$update->execute($allData);
	}

	public function updateEvent($allData=array()){
		$sql = "UPDATE";

		$update = $this->db->prepare($sql);

		$update->execute($allData);
	}
}
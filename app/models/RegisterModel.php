<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function registerMember($allDatas=array()){
        $sql = "INSERT INTO members_rkmd (name_member,username_member,type_member,pass_member,permission_member,id_branch,entrydate_member,birth_member,tel_member,rg_member,zip_member,state_member,city_member,neighboorhood_member,complement_member,status_member) VALUES (:name_member,:username_member,:type_member,:pass_member,:permission_member,:id_branch,:entrydate_member,:birth_member,:tel_member,:rg_member,:zip_member,:state_member,:city_member,:neighboorhood_member,:complement_member,:status_member)";

        $insert = $this->db->prepare($sql);

        $insert->execute($allDatas);

    }

    public function registerEvent($allDatas=array()){
        $sql = "INSERT INTO events (name_event,dateinit_event,datefin_event,zip_event,state_event,city_event,neighboorhood_event,street_event,complement_event,annotation_event,responsible_event,status_event) VALUES (:name_event,:dateinit_event,:datefin_event,:zip_event,:state_event,:city_event,:neighboorhood_event,:street_event,:complement_event,:annotation_event,:responsible_event,:status_event)";

        cat($insert = $this->db->prepare($sql));

        $insert->execute($allDatas);
    }
    
}
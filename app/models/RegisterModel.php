<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function registerMember($allDatas=array()){
        $sql = "INSERT INTO members_rkmd (id_member,name_member,username_member,id_type,pass_member,permission_member,id_branch,entrydate_member,birth_member,tel_member,rg_member,zip_member,state_member,city_member,neighboorhood_member,street_member,complement_member,status_member) VALUES (:id_member,:name_member,:username_member,:id_type,:pass_member,:permission_member,:id_branch,:entrydate_member,:birth_member,:tel_member,:rg_member,:zip_member,:state_member,:city_member,:neighboorhood_member,:street_member,:complement_member,:status_member)";

        $insert = $this->db->prepare($sql);

        $insert->execute($allDatas);

    }

    public function registerEvent($allDatas=array()){
        $sql = "INSERT INTO events (name_event,date_init,hour_init,date_fin,hour_fin,dateinit_event,datefin_event,numbermember_event,zip_event,state_event,city_event,neighboorhood_event,street_event,complement_event,annotation_event,responsible_event,status_event) VALUES (:name_event,:date_init,:hour_init,:date_fin,:hour_fin,:dateinit_event,:datefin_event,:numbermember_event,:zip_event,:state_event,:city_event,:neighboorhood_event,:street_event,:complement_event,:annotation_event,:responsible_event,:status_event)";

        $insert = $this->db->prepare($sql);

        if(!$insert->execute($allDatas)){
            echo "Falha no cadastro dos eventos";
            die();
        }
    }

    public function registerBranchEvent($id_branch,$id_event){
        $sql = "INSERT INTO event_branch (id_event,id_branch) VALUES (:id_event,:id_branch) ";

        $insert = $this->db->prepare($sql);
        $insert->bindValue(":id_event",$id_event);
        $insert->bindValue(":id_branch",$id_branch);
        if(!$insert->execute()){
            echo "Falha no Cadastro de participantes!";
        }
    }

    public function registerMessage($allDatas=array()){
        $sql = "INSERT INTO messages (date_init,date_fin,message_title,message,message_by) ";
        $sql.= "VALUES (:date_init,:date_fin,:message_title,:message,:message_by) ";

        
        $insert = $this->db->prepare($sql);

        if(!$insert->execute($allDatas)){
            echo "Falha no Cadastro da mensagem!";
        };
    }

    public function registerBranchMessage($id_message,$id_branch){
        $sql = "INSERT INTO message_branch (id_branch,id_message) VALUES (:id_branch,:id_message) ";
        $insert = $this->db->prepare($sql);
        $insert->bindValue(':id_branch',$id_branch);
        $insert->bindValue(':id_message',$id_message);
        if(!$insert->execute()){
            echo "Falha no Cadastro de participantes!";
        }
    }

    public function registerTraining($allDatas=array()){
        $sql = "INSERT INTO next_training (date_training,place_training,annotation_training,organizer_training) ";
        $sql.= "VALUES (:date_training,:place_training,:annotation_training,:organizer_training) ";
        
        $insert = $this->db->prepare($sql);
        if(!$insert->execute($allDatas)){
            echo "Falha no Cadastro da mensagem!";
        };
    }

    public function registerBranchTraining($id_training,$id_branch){
        $sql = "INSERT INTO training_branch (id_branch,id_training) VALUES (:id_branch,:id_training) ";
        $insert = $this->db->prepare($sql);
        $insert->bindValue(':id_branch',$id_branch);
        $insert->bindValue(':id_training',$id_training);
        if(!$insert->execute()){
            echo "Falha no Cadastro de participantes!";
        }

    }


}
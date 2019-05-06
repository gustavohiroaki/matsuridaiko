<?php

namespace app\models;

use app\core\Model;

class ConsultModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function selectAllMembers(){
        $sql  = "SELECT * FROM members_rkmd ";
        $sql .= "INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type ";
        $sql .= "INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch ";

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function filterAllMembers($name, $id_branch){
        $sql = "SELECT * FROM members_rkmd ";
        $sql .= "INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type ";
        $sql .= "INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch ";
        $sql .= "WHERE members_rkmd.id_member > 0 ";
        if($name!==""){
            $sql.= "AND members_rkmd.name_member LIKE '%{$name}%' ";
        }
        if($id_branch!==""){
            $sql.= "AND members_rkmd.id_branch = {$id_branch} ";
        }
        $select = $this->db->query($sql);
        return json_encode($select->fetchAll());
    }

    public function selectMembers($where=""){
        $sql  = "SELECT * FROM members_rkmd ";
        $sql .= "INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type ";
        $sql .= "INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch ";
        $sql .= "WHERE members_rkmd.id_type = 3 ";
        if($where!==""){
        $sql .= "AND id_member = {$where}";
        }

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectJuniors($where=""){
        $sql  = "SELECT * FROM members_rkmd ";
        $sql .= "INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type ";
        $sql .= "INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch ";
        $sql .= "WHERE members_rkmd.id_type = 2 ";
        if($where!==""){
        $sql .= "AND id_member = {$where}";
        }

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectShinjins($where=""){
        $sql  = "SELECT * FROM members_rkmd ";
        $sql .= "INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type ";
        $sql .= "INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch ";
        $sql .= "WHERE members_rkmd.id_type = 1 ";
        if($where!==""){
        $sql .= "AND id_member = {$where}";
        }

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectAllEvents(){
        $sql = "SELECT * FROM events";

        $select = $this->db->query($sql);

        return $select->fetchAll();
    }

    public function selectEvent($where=""){
        $sql = "SELECT * FROM events ";

        if($where!==""){
            $sql.="WHERE id_event = {$where} ";
        }
        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectLastEvent(){
        $sql = ("SELECT id_event FROM events ORDER BY id_event DESC LIMIT 1");

        $select = $this->db->query($sql);
        return $select->fetch();
    }

    public function filterAllEvents($name="",$date=""){
        $sql = "SELECT * FROM events WHERE id_event > 0 ";

        if($name!==""){
            $sql.="AND name_event LIKE '%{$name}%'";
        }

        if($date!==""){
            $sql.="AND date_init = '{$date}' ";
        }

        $select = $this->db->query($sql);

        return json_encode($select->fetchAll());
    }

    public function pastEvents($where=""){
        $sql = "SELECT * FROM events WHERE date_fin < now() ";
        if($where!==""){
            $sql .= "WHERE id_event = $where ";
        }
        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectLastMessage(){
        $sql = ("SELECT id_message FROM messages ORDER BY id_message DESC LIMIT 1");

        $select = $this->db->query($sql);
        return $select->fetch();
    }

    public function selectLastTraining(){
        $sql = ("SELECT id_training FROM next_training ORDER BY id_training DESC LIMIT 1");

        $select = $this->db->query($sql);
        return $select->fetch();
    }

    public function selectMessages($where=""){

        $sql = 
        "SELECT 
                messages.id_message,message as completeMessage,left(message,15) as message,message_by,date_init,date_fin,name_branch,message_branch.id_branch
        FROM 
                messages 
        JOIN 
                message_branch
        ON
                messages.id_message = message_branch.id_message
        JOIN
                branch
        ON
                branch.id_branch = message_branch.id_branch
        WHERE
                (now() BETWEEN date_init AND date_fin)
        AND
                message_branch.id_branch = {$_SESSION["branch_id"]}
         ";

        if($where!==""){
            $sql.="AND messages.id_message = {$where}";
        }

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectIdMessageBranch($where){
        $sql="SELECT id_branch FROM message_branch WHERE id_message = ?";

        $select = $this->db->prepare($sql);
        $select->bindValue(1,$where);
        $select->execute();
        return $select->fetchAll();
    }

    public function selectTraining($where=""){
        $sql = 
        "SELECT
                next_training.id_training,date_training,place_training,annotation_training,left(annotation_training,30) as parcial_annotation,organizer_training,training_branch.id_branch,name_branch
        FROM
                next_training
        INNER JOIN
                training_branch
        ON
                next_training.id_training = training_branch.id_training
        INNER JOIN
                branch
        ON
                training_branch.id_branch = branch.id_branch
        WHERE
                training_branch.id_branch = {$_SESSION["branch_id"]} 
        ";

        if($where!==""){
            $sql.=" AND next_training.id_training = $where";
        }

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }


    public function selectIdTrainingBranch($where){
        $sql="SELECT id_branch FROM training_branch WHERE id_training = ?";

        $select = $this->db->prepare($sql);
        $select->bindValue(1,$where);
        $select->execute();
        return $select->fetchAll();
    }

    public function selectIdEventBranch($where){
        $sql="SELECT id_branch FROM event_branch WHERE id_event = ?";

        $select = $this->db->prepare($sql);
        $select->bindValue(1,$where);
        $select->execute();
        return $select->fetchAll();
    }

    
}



<?php

namespace app\models;

use app\core\Model;

class DeleteModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function deleteMember($where){
        $sql2 = "DELETE FROM members_rkmd WHERE id_member = :id_member";
        $delete = $this->db->prepare($sql2);
        $delete->bindValue("id_member",$where);
        $delete->execute();
    }

    public function deleteEvent($where){
        $sql2 = "DELETE FROM events WHERE id_event = :id_event";
        $delete = $this->db->prepare($sql2);
        $delete->bindValue("id_event",$where);
        $delete->execute();
    }

    public function deleteMessage($where){
        $sql1 = "DELETE FROM message_branch WHERE id_message = :id_message";
        $deleteReference = $this->db->prepare($sql1);
        $deleteReference->bindValue("id_message",$where);
        $deleteReference->execute();

        $sql2 = "DELETE FROM messages WHERE id_message = :id_message";
        $delete = $this->db->prepare($sql2);
        $delete->bindValue("id_message",$where);
        $delete->execute();
    }

    public function deleteTraining($where){
        $sql1 = "DELETE FROM training_branch WHERE id_training = :id_training";
        $deleteReference = $this->db->prepare($sql1);
        $deleteReference->bindValue("id_training",$where);
        $deleteReference->execute();

        $sql2 = "DELETE FROM next_training WHERE id_training = :id_training";
        $delete = $this->db->prepare($sql2);
        $delete->bindValue("id_training",$where);
        $delete->execute();
    }

    public function deleteMessage_branch($where){
        $sql2 = "DELETE FROM message_branch WHERE id_message = :id_message";
        $delete = $this->db->prepare($sql2);
        $delete->bindValue(":id_message",$where);

        $delete->execute();
    }

    public function deleteTraining_branch($where){
        $sql2 = "DELETE FROM training_branch WHERE id_training = :id_training";
        $delete = $this->db->prepare($sql2);
        $delete->bindValue(":id_training",$where);

        $delete->execute();
    }

    
}
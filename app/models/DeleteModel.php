<?php

namespace app\models;

use app\core\Model;

class DeleteModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function deleteMember($where){
        $sql = "DELETE FROM members_rkmd WHERE id_member = :id_member";
        $delete = $this->db->prepare($sql);
        $delete->bindValue("id_member",$where);
        $delete->execute();
    }

    public function deleteMessage_branch($where){
        $sql = "DELETE FROM message_branch WHERE id_message = :id_message";
        $delete = $this->db->prepare($sql);
        $delete->bindValue(":id_message",$where);

        $delete->execute();
    }

    public function deleteTraining_branch($where){
        $sql = "DELETE FROM training_branch WHERE id_training = :id_training";
        $delete = $this->db->prepare($sql);
        $delete->bindValue(":id_training",$where);

        $delete->execute();
    }
}
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
}
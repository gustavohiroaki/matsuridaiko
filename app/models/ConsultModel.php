<?php

namespace app\models;

use app\core\Model;

class ConsultModel extends Model{
    public function __construct(){
        parent::__construct();
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

    public function pastEvents($where=""){
        $sql = "SELECT * FROM events WHERE date_fin < now() ";
        if($where!==""){
            $sql .= "WHERE id_event = $where ";
        }
        $select = $this->db->query($sql);
        return $select->fetchAll();
    }
    
}



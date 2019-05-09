<?php

namespace app\models;

use app\core\Model;

class Login extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function login($user){
        // $sql = "SELECT id_member,permission_member,id_branch,username_member,pass_member FROM members_rkmd WHERE username_member = ?";
        $sql  = "SELECT id_member,name_member,permission_member,name_branch,username_member,pass_member,members_rkmd.id_branch as branch_id FROM members_rkmd ";
        $sql .= "INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type ";
        $sql .= "INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch ";
        $sql .= "WHERE members_rkmd.username_member = ? ";
        
        $qry = $this->db->prepare($sql);
        $qry->bindValue(1,$user);
        $qry->execute();
        
        return $qry->fetchAll();
    }
}
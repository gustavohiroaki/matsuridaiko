<?php

namespace app\models;

use app\core\Model;

class Login extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function login($user){
        $sql = "SELECT id_member,permission_member,id_branch,username_member,pass_member FROM members_rkmd WHERE username_member = ?";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(1,$user);
        $qry->execute();

        return $qry->fetchAll();
    }
}
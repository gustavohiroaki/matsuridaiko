<?php

namespace app\models;

use app\core\Model;

class Login extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function login($user){
        $sql = "SELECT id_member,username_member,pass_member FROM members_rkmd WHERE username_member = ?";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(1,$user);
        $qry->execute();
        // dd($qry->fetchAll());
        return $qry->fetchAll();
    }
}
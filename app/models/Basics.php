<?php

namespace app\models;

use app\core\Model;

class Basics extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function select($table,$where="",$value=""){
        $sql = "SELECT * FROM {$table}";
            if($where!==""){
                $sql .= " WHERE {$where} = :{$where}";

                $select = $this->db->prepare($sql);
                $select->bindValue($where, $value);
                $select->execute();

                return $select->fetch();
                exit();
            }
        $select = $this->db->query($sql);
        return $select->fetchAll();
    }


}
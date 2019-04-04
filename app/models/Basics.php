<?php

namespace app\models;

use app\core\Model;

class Basics extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function select($table,$where="",$condition="",$value=""){
        $sql = "SELECT * FROM {$table}";
            if($where!==""){
                $sql .= " WHERE {$where} {$condition} :{$where}";

                $select = $this->db->prepare($sql);
                $select->bindValue($where, $value);
                $select->execute();

                return $select->fetchAll();
                exit();
            }
        $select = $this->db->query($sql);
        return $select->fetchAll();
    }


}
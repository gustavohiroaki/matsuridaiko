 <?php

namespace app\models;

use app\core\Model;

class Test extends Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function list(){
        $sql = "SELECT * FROM temp_test";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}
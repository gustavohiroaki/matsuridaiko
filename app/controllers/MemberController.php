<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Test;

class MemberController extends Controller{
    
    function index(){
        echo "Index Member";
    }
    
    function listMember(){
        $datas = new Test;
        $data["member"] = $datas->list();

        $this->view("template",$data);
    }
    
}
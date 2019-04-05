<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Test;

class MemberController extends Controller{
    
    function index(){
        echo "Index Member";
    }
    function test($a="",$b="",$c="",$d=""){
        echo $a;
        echo $b;
        echo $c;
        echo $d;
    }
    
    
}
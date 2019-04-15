<?php

namespace app\controllers;

use app\core\Controller;
use app\models\ConsultModel;

class DetailsController extends Controller{
    public function index(){

    }

    public function pastEvents($where=""){
        $this->security();
        
    }
}
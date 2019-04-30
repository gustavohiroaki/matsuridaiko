<?php

namespace app\controllers;

use app\core\Controller;

class IndexController extends Controller{
    
    function index(){

        $this->add_view("site_index");
        $this->master_interface("site");
    }


}

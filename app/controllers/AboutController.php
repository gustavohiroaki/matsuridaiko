<?php

namespace app\controllers;

use app\core\Controller;

class AboutController extends Controller{
    
    function index(){

        $this->add_view("site_about");
        $this->master_interface("site");
    }


}

<?php

namespace app\controllers;

use app\core\Controller;

class ContactController extends Controller{

    function index(){

        $this->add_view("site_contact");
        $this->master_interface("site");
    }
}
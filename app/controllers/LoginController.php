<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Login;

class LoginController extends Controller{
    public function index(){
        $this->add_view("login");
        $this->master_interface("login");
    }
    public function login(){

        $postUser = $_POST["login_user"];
        $postPass = $_POST["login_pass"];
        $loginObj = new Login;
        
        $correct = $loginObj->login($postUser);


        if($correct){
            if($postUser == $correct[0]->username_member && $postPass == $correct[0]->pass_member){
                session_start();

                $_SESSION["id"] = $correct[0]->id_member;
                $_SESSION["name"] = $correct[0]->name_member;
                $_SESSION["branch"] = $correct[0]->name_branch;
                $_SESSION["permission"] = $correct[0]->permission_member;
                header("location:".BASE_URL."dashboard");
            }
            else{
                header("location:".BASE_URL."login");
            };
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("location:".BASE_URL."login");
    }
}
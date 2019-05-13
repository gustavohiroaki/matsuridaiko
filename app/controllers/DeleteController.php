<?php

namespace app\controllers;

use app\core\Controller;
use app\models\DeleteModel;

class DeleteController extends Controller {
    public function index(){
        $this->security();

    }

    public function deleteMember(){
        $this->security();

        $delete = new DeleteModel;
        // dd((int)$_POST["id"]);
        $delete->deleteMember((int)$_POST["id"]);
    }

    public function deleteEvent(){
        $this->security();

        $delete = new DeleteModel;

        $delete->deleteEvent((int)$_POST["id"]);
    }

    public function deleteMessage(){
        $this->security();
        $delete = new DeleteModel;

        $delete->deleteMessage((int)$_POST["id"]);
    }

    public function deleteTraining(){
        $this->security();
        $delete = new DeleteModel;

        $delete->deleteTraining((int)$_POST["id"]);
    }



}
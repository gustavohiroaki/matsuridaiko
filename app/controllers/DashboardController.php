<?php

namespace app\controllers;

use app\core\Controller;

use app\models\DashboardModel;

class DashboardController extends Controller{
    public function index(){
        $this->security();
        $query = new DashboardModel;

        $this->
        $this->add_view("dashboard_main");
        $this->master_interface("dashboard");

    }

    
}

use homologacao;

SELECT * FROM events 
JOIN event_branch ON events.id_event = event_branch.id_event
WHERE now() BETWEEN date_init AND date_fin
AND id_branch = 1
LIMIT 5;

SELECT * FROM messages
JOIN message_branch ON messages.id_message = message_branch.id_message
WHERE now() BETWEEN date_init AND date_fin
AND id_branch = 1
LIMIT 5;

SELECT * FROM next_training
JOIN training_branch ON next_training.id_training = training_branch.id_training
WHERE now() < date_training
AND id_branch = 1
LIMIT 5;
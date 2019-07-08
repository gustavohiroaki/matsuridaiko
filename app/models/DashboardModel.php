<?php

namespace app\models;

use app\core\Model;

class DashboardModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function selectEvents(){
        $sql = "
            SELECT * FROM events 
            JOIN event_branch ON events.id_event = event_branch.id_event
            WHERE CURDATE() <= date_init
            AND id_branch = {$_SESSION["branch_id"]}
            LIMIT 5
        ";

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectMessages(){
        $sql = "
            SELECT * FROM messages
            JOIN message_branch ON messages.id_message = message_branch.id_message
            WHERE CURDATE() BETWEEN date_init AND date_fin
            AND id_branch = {$_SESSION["branch_id"]}
            LIMIT 5
        ";

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function selectTraining(){
        $sql = "
            SELECT * FROM next_training
            JOIN training_branch ON next_training.id_training = training_branch.id_training
            WHERE CURDATE() <= date_training
            AND id_branch = {$_SESSION["branch_id"]}
            LIMIT 5
        ";

        $select = $this->db->query($sql);
        return $select->fetchAll();
    }

    public function tableEvents(){
        $sql = "
        SELECT * FROM events 
        JOIN event_branch ON events.id_event = event_branch.id_event
        WHERE CURDATE() <= date_init
        AND id_branch = {$_SESSION["branch_id"]}
        LIMIT 5
        ";

        $select = $this->db->query($sql);
        echo json_encode($select->fetchAll());
    }

    public function tableMessages(){
        $sql = "
            SELECT * FROM messages
            JOIN message_branch ON messages.id_message = message_branch.id_message
            WHERE CURDATE() BETWEEN date_init AND date_fin
            AND id_branch = {$_SESSION["branch_id"]}
            LIMIT 5
        ";

        $select = $this->db->query($sql);
        echo json_encode($select->fetchAll());
    }

    public function tableTraining(){
        $sql = "
            SELECT * FROM next_training
            JOIN training_branch ON next_training.id_training = training_branch.id_training
            WHERE now() <= date_training
            AND id_branch = {$_SESSION["branch_id"]}
            LIMIT 5
        ";

        $select = $this->db->query($sql);
        echo json_encode($select->fetchAll());
    }
}
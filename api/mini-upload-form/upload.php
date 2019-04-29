<?php

require '../../config/const.php';

// $sql = "SELECT * FROM events";
// $qry = $apiConnect->query($sql);


detectFormat();




function detectFormat(){
	switch($_FILES["upl"]["type"]){
		case 'image/png':
		case 'image/jpeg':
		case 'image/jpg':
			imageUpload();
			break;

		case 'audio/mp3':
		case 'audio/mpeg':
		case 'audio/mpeg3':
		case 'audio/x-mpeg-3':
			musicUpload();
			break;
	}
}

function imageUpload(){
	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/img/'.$_FILES['upl']['name'])){
		echo '{"status":"success"}';
		exit;
	}
}

function musicUpload(){
	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/mp3/'.$_FILES['upl']['name'])){
		$apiConnect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$apiConnect->set_charset("utf8");
		$sql = "INSERT INTO music (name_music) VALUES ('{$_FILES['upl']['name']}')";
		$qry = $apiConnect->query($sql);
		echo '{"status":"success"}';
		exit;
	}
}
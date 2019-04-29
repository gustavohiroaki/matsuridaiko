<?php

//console array test
function catjson($a){
    echo '<script>';
    echo 'console.log('. json_encode( $a ) .')';
    echo '</script>';
}

// function cat( $data ) {
//     $str = implode("", $data);
//     echo '<script>';
//     echo "console.log({$str})";
//     echo '</script>';
// }

//Die Dump
function dd($e){

    var_dump($e);

    die();
}

//Text Test
function tt($i){
    echo $i;

    die();
}


// function detectFormat(){
// 	switch($_FILES["upl"]["type"]){
// 		case 'image/png':
// 		case 'image/jpeg':
// 		case 'image/jpg':
// 			imageUpload();
// 			break;

// 		case 'audio/mpeg':
// 		case 'audio/mpeg3':
// 		case 'audio/x-mpeg-3':
// 			musicUpload();
// 			break;
// 	}
// }

// function imageUpload(){
// 	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/img/'.$_FILES['upl']['name'])){
// 		echo '{"status":"success"}';
// 		exit;
// 	}
// }

// function musicUpload(){
// 	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/mp3/'.$_FILES['upl']['name'])){
// 		echo '{"status":"success"}';
// 		exit;
// 	}
// }
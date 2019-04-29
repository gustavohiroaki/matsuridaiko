<?php

function formatDate($date,$to){

    if($to=="BR"){
        $newDate = date("d-m-Y",strtotime($date));
    }
    elseif($to=="USA"){
        $newDate = date("Y-m-d",strtotime($date));
    }

    return $newDate;
};

function returnUpdate($d){
    switch ($d) {
        case 1:
            return 'update/shinjin/';
            break;
        case 2:
            return 'update/junior/';
            break;
       case 3:
           return 'update/member/';
           break;
    }
}


// $dataUSA = "1998-12-21";
// $dataBR = "21-12-1998";
// $formatada = formatDate($dataBR,"USA");
// echo $formatada;
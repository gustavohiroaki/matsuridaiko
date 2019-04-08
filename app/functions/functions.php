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

// $dataUSA = "1998-12-21";
// $dataBR = "21-12-1998";
// $formatada = formatDate($dataBR,"USA");
// echo $formatada;
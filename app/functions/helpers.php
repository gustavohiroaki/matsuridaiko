<?php

//console array test
function catjson($a){
    echo '<script>';
    echo 'console.log('. json_encode( $a ) .')';
    echo '</script>';
}

function cat( $data ) {
    $str = implode("", $data);
    echo '<script>';
    echo "console.log({$str})";
    echo '</script>';
}

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
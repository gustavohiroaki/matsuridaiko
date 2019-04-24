<?php

//console array test
function catjson($a){
    echo '<script>';
    echo 'console.log('. json_encode( $a ) .')';
    echo '</script>';
}

function cat( $data ) {
    echo '<script>';
    echo 'console.log('. var_dump($data).')';
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
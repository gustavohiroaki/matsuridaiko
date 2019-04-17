<?php

//console array test
function cat($a){
    echo '<script>';
    echo 'console.log('. json_encode( $a ) .')';
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
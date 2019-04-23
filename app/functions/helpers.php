<?php

//console array test
function catjson($a){
    echo '<script>';
    echo 'console.log('. json_encode( $a ) .')';
    echo '</script>';
}

function cat( $data ) {
    echo "'<script>console.log(\"$data\")</script>'";
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
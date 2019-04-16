<?php
require 'vendor/autoload.php';
require 'app/core/Core.php';
require 'config/const.php';
require 'app/functions/helpers.php';
require 'app/functions/functions.php';

$core = new Core;
$core->execFunc();
// echo "<br>";
// echo $core->getController();
// echo "<br>";
// echo $core->getMethod();
// echo "<br>";
// echo "<pre>";
// print_r($core->getParameters());
?>


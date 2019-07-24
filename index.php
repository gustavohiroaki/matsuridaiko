<?php
require 'app/functions/helpers.php';
require 'vendor/autoload.php';
require 'app/core/Core.php';
require 'config/const.php';

require 'app/functions/functions.php';

$core = new Core;
$core->execFunc();

?>

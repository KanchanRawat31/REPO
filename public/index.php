<?php
require ("../vendor/autoload.php");
require '../model/database/connection.php';
//include '../common/config.php';
include '../common/super_controller.php';
include("../common/Routes.php");
new Routes();

?>
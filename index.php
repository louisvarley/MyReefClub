<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Defines */
include('app/defines.php');

/* Composer Auto Loads */
include('app/vendor/autoload.php');

/* Functions */
include('app/functions.php');

/* Core Page */
$page = new myReef\classes\page();



?>





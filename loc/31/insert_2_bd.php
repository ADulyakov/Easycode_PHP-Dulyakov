<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'request.php';
include_once 'save.php';

$insert = "INSERT INTO `author` (name, age) VALUES ('$name', '$age');";


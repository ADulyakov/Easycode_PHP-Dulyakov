<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Color.php';
include 'Component.php';
include 'Rectangle.php';


$color = new Color(127,0,0) ;
$rect = new Rectangle($color, 100, 50);
$rect->render();
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('location: index.php');

// File DB data
require_once 'db.php';

// Connection to DB
$connectionObject = getDbConnection();

//delete author from Db
if(isset($_GET['delAuthorId'])) {
    $delId = $_GET['delAuthorId'];
    $sqlDelFromDB = "DELETE FROM `author` WHERE `id` = $delId";
    $delFromDB = mysqli_query($connectionObject, $sqlDelFromDB );
};
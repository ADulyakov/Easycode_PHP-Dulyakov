<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'request.php';
include_once 'insert_2_bd.php';


if(isset($_POST['name']) && $_POST['name'] != '' && $_POST['age'] != '') {
    $name = $_POST['name'];
    // $name = mysql_real_escape_string($name);
    $age = $_POST['age'];
    $newAuthor = mysqli_query($connectionObject, $insert);
    if($newAuthor) {
        echo 'В БД добавлен автор: ' . $name . ', возраст: ' . $age;
    }
};
header('location: request.php');

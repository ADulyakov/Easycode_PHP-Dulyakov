<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// File DB data
require_once 'db.php';
// Connection to DB
$connectionObject = getDbConnection();
//Add author to DB
if(isset($_GET['author']) && $_GET['author'] !='' && $_GET['age'] !=''){
    $name = trim ($_GET['author']);
    $name = addslashes($name);
    $age = $_GET['age'];
    $sqlAddDataToBase = "INSERT INTO `author` (`name`, `age`) VALUES ('$name','$age');";
    $saveToBase = mysqli_query($connectionObject, $sqlAddDataToBase);
    if($saveToBase){
        echo "Автор добавлен успешно";
    } else {
        echo "Ошибка добавления в базу";
    }
};

header('location: index.php');
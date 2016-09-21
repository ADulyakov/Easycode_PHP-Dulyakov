<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// File DB data
require_once 'query.php';

//Add author to DB
if(isset($_GET['author']) && $_GET['author'] !='' && $_GET['age'] !='') {
    $saveToBase = addAuthor($_GET['author'], $_GET['age']);
    if($saveToBase){
        echo "Автор добавлен успешно";
    } else {
        echo "Ошибка добавления в базу";
    }
};

header('location: index.php');

?>


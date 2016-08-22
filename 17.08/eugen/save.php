<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'cookie.php';

if (isset($_GET['header']) && $_GET['header'] != '') {
    saveData($_GET['header'], $_GET['text'], $_GET['imgUrl']);
}
header('location: index.php');
?>
<a href="index.php">На главную</a>

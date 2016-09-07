<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'cookie.php';
if (isset($_GET['noteName'])) {
    hideNoteImage($_GET['noteName'], '', -1);
};
header('location: index.php');

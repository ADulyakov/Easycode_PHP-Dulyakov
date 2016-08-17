<?php
require 'cookie.php';
if (isset($_GET['noteName'])) {
    hideNoteImage($_GET['noteName']);
};
header('location: index.php');
?>
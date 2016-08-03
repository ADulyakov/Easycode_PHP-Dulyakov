<?php
$life = $_GET['life'];
$login = $_GET['login'];
$time = time() + $life;
$date = date('Y-m-d H:i:s');
setcookie('login', $login, $time);
setcookie('lastLoginTime', $date, $time);
?>

<a href="form.php">Вернуться назад</a>

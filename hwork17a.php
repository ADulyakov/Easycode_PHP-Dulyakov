<?php
ini_set("display_startup_errors", 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

Мои КУКИ:
<br />

<form action="" name="test-form-cookie" method="GET">
    Имя: <input type="text" name="name" value=" " title="1"/> <br />
    Фамилия: <input type="text" name="lastname" value=" " title="2" /> <br />
    <input type="submit" value="Отправить!" >
    <br />
</form>
<hr>

<?php

// в cookie
$time = time() + 60 * 60 * 24 * 7;
setcookie('cookie1', $_GET['name'], $time);
setcookie('cookie2', $_GET['lastname'], $time );

// в cookie_print

echo $_COOKIE['cookie1'] .' '. $_COOKIE['cookie2'];

?>
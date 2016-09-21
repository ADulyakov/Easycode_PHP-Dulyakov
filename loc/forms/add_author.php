<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<form action="addtodb.php" method="GET">
Имя автора <input type="text" name="author"> <br />
Возраст автора <input type="text" name="age"><br />
<input type="submit" name="Save" value="добавить">

</form>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'query.php';

?>
<?php require_once 'forms/add_author.php'?>

<?php
/*// Connection to DB
$connectionObject = getDbConnection();*/


$rows = getAuthorWithBookCount();



?>
<!--HTML part "View table author" -->
<table border="1">
    <tr>
        <th> № </th>
        <th> Имя Автора </th>
        <th> Возраст </th>
        <th> Кол-во книг </th>
        <th> Удалит автора </th>
    </tr>
    <?php foreach ($rows as $index => $author) : ?>
        <tr>
            <td> <?= $author ['id'] ?> </td>
            <td> <a href="author.php?id=<?= $author['id'] ?>&name=<?= $author['name'] ?>"><?= $author['name'] ?></a> </td>
            <td> <?= $author ['age'] ?> </td>
            <td> <?= $author ['booksQuantity'] ?> </td>
            <td>
                <form action="delFromDb.php" name="deleteAuthor" method="GET">
                    <input type="hidden" name="delAuthorId" value="<?= $author['id'] ?>">
                    <input type="submit" name="delete"  value="Удалить">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>



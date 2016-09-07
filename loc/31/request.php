<form action="save.php" name="authors" method='POST'>
    Имя автора: <input type="text" name="name">
    Возраст: <input type="text" name="age">
    <input type="submit" value="Save">
</form>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'connection.php';
include_once 'save.php';
include_once 'insert_2_bd.php';
include_once 'require.php';


$connectionObject = mysqli_connect($host, $user, $password, $database);

$resource = mysqli_query($connectionObject, $require);

$rows = array();
    while (true) {
        $row = mysqli_fetch_assoc($resource);
        if ($row === null) {
            break;
        }
        $rows[] = $row;
}
?>

<table style="border: #000 1px solid">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Books quantity</td>
    </tr>

    <?php foreach($rows as $index => $author): ?>

        <tr>
            <td><?= $author['id'] ?></td>
            <td>
                <form action="author.php" name="authorPage" method='POST'>
                    <input type="submit" name="authorName" value="<?= $author['name'] ?>">
                </form>
            </td>
            <td><?= $author['age'] ?></td>
            <td><?= $author['booksQuantity'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>
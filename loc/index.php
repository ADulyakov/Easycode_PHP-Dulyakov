<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Host and User Data
$host ='localhost';
$user = 'root';
$pass = 'уфынсщву2';
$base = 'sasha';

// Connection to DB
$connectionObject = mysqli_connect($host, $user, $pass, $base);
    if ($connectionObject) {
        echo "connect to DB ok";
    } else {
        echo "file to connect DB";
};

//request


$sql = "SELECT 
            `atr`.`id`, 
            `atr`.`name`,
            `atr`.`age`,
            COUNT(`ab`.`author_id`) AS `booksQuantity`             
            FROM `author` AS `atr`
            LEFT JOIN `author_book` AS `ab`
            ON 
            `atr`.`id` = `ab`.`author_id`
            GROUP BY `atr`.`id`;
            ";

$resource = mysqli_query($connectionObject, $sql);

//receiving data

$rows = array();
while ($row = mysqli_fetch_assoc($resource)){
        $rows[] = $row;
};

//Add author to DB
if(isset($_GET['author']) && $_GET['author'] !='' && $_GET['age'] !=''){
    $name = $_GET['author'];
    $age = $_GET['age'];
    $addDataToBase = "INSERT INTO `author` (`name`, `age`) VALUES ('$name','$age');";
    $saveToBase = mysqli_query($connectionObject, $addDataToBase);
        if($saveToBase){
            echo "Автор добавлен успешно";
        } else {
            echo "Ошибка добавления в базу";
        }
};

//delete author from Db
if(isset($_GET['delAuthorId'])) {
    $delId = $_GET['delAuthorId'];
    $delFromDB = mysqli_query($connectionObject, "DELETE FROM `author` WHERE `id` = $delId");
};

echo '<br />';
echo '<pre>';
print_r($rows);
echo '</pre>';

?>

<!--HTML part "View table author" -->

<form action="" name="addToBase" method="GET">
Имя автора:     <input type="text" name="author" value="" > <br>
Возраст автора: <input type="text" name="age" value="" > <br>
                <input type="button" name="addButton" value="добавить" >
</form>

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
        <td> <?= $author ['name'] ?> </td>
        <td> <?= $author ['age'] ?> </td>
        <td> <?= $author ['booksQuantity'] ?> </td>
        <td>
            <form action="" name="deleteAuthor" method="GET">
                <input type="hidden" name="delAuthorId" value="<?= $author['id'] ?>">
                <input type="button" name="delete"  value="Удалить">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

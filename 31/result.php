
<table style="border: #000 1px solid">
    <tr>
        <td>id</td><td>name</td><td>age</td><td>count_book</td>

        <td><?= $authorId ?> </td>
        <td> <?= $authorName ?> </td>
        <td> <?= $authorAge ?> </td>
        <td> <?= $booksQuantity ?> </td>

    </tr>
</table>


<?php

$connectionObject = mysqli_connect("localhost", "root", "easycode2", "sasha")
    or die("Ошибка " . mysqli_error($link)); // создаем соединение с базой данных
$$authorId = mysqli_query($connectionObject,
    "SELECT
   `a`.`id`
FROM `author` AS `a` 
ORDER BY `a`.`id`;"
);

$authorName = mysqli_query($connectionObject,
    "SELECT
   `a`.`name`
FROM `author` AS `a` 
ORDER BY `a`.`id`;"
);

$authorAge = mysqli_query($connectionObject,
    "SELECT
   `a`.`age`
FROM `author` AS `a` 
ORDER BY `a`.`id`;"
);
$booksQuantity = mysqli_query($connectionObject,
    "SELECT
   count(*)
FROM `author` AS `a`
INNER JOIN `author_book` AS `ab`
  ON `a`.`id` = `ab`.`author_id`
 GROUP BY `a`.`name`;"
);

$resource = mysqli_query($connectionObject, $query)
    or die("Ошибка запроса" . mysqli_error($link)); // выполянем запрос к базе, указывая при этом какое соединение использовать

$rows = array();
while (true) {
$row = mysqli_fetch_assoc($resource);
    if ($row === null) {
    break;
    }

    $rows[] = $row;
}

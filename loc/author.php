<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';

$connectionObject = getDbConnection();

if(isset($_GET['id'])) {
    $authorID = $_GET['id'];
    $authorName = $_GET['name'];
    echo 'Author: ' . $authorName;
    echo '<br />';
    $sql = "
		SELECT
        	`ab`.`author_id`,
        	`b`.`title`
        FROM `author_book` AS `ab`
        LEFT JOIN `books` AS `b`
        	ON `b`.`id` = `ab`.`book_id`
        WHERE `ab`.`author_id` = '{$authorID}';";

    $resource = mysqli_query ($connectionObject, $sql);
      
    //$rows = $authorID;
    
    if (!$resource) {
        echo '<br/>У этого автора пока нет книг.<br />';
    } else {
        ?>
        <table border="1">
            <tr>
                <td>Books:</td>
            </tr>
            <?php foreach($resource as $index => $authorsData): ?>
                <tr>
                    <td><?= $authorsData['title']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php
    }
} else {
    echo 'Вернитесь к выбору автора.<br />';
}
?>
<br />
<form action="index.php" name="back">
    <input type="submit" value="на главную">
</form>
 
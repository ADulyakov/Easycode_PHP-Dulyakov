<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'query.php';
?>
<?php

$resource = getAuthor($_GET['id'], $_GET['name']);
    if(isset($_GET['id'])) {
    //$authorID = $_GET['id'];
    $authorName = $_GET['name'];
    echo 'Author: ' . $authorName;
    echo '<br />';


?>

<?php

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
<?php }
            } else {
               echo 'Вернитесь к выбору автора.<br />';
               }
?>


<br />
<form action="index.php" name="back">
    <input type="submit" value="на главную">
</form>
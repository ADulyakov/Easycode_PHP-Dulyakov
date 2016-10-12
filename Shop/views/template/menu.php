<?php
namespace Shop\views\template;
use Shop\db\Db;

//require_once 'db/Db.php';

$sql = "SELECT * FROM category";
$rows = Db::getConnection()->query($sql)->fetchAll();
?>

<nav class="nav">
    <ul>
        <?php foreach ($rows as $category): ?>
            <li><a href="#"><?= $category['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
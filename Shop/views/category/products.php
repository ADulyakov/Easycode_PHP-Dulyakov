<?php
namespace Shop\views\category;
?>

<ul>
    <?php foreach ($products as $product): ?>
        <li><?= $product['title'] ?></li>
    <?php endforeach; ?>
</ul>
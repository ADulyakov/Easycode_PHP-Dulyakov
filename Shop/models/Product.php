<?php
require_once 'db/Db.php';

class Product
{
    public function getProducts($limit)
    {
        $sql = "SELECT `title` FROM `product` LIMIT {$limit}";
        return Db::getConnection()->query($sql)->fetchAll();
    }
}

<?php
require_once 'db/Db.php';

class All
{
    public function getProducts()
    {
        $sql = "SELECT `title` FROM `product`";
        return Db::getConnection()->query($sql)->fetchAll();
    }
}

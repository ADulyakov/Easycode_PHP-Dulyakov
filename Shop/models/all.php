<?php
require_once 'db/Db.php';

class All
{
    public function getProduct()
    {
        $sql = "SELECT * FROM `product`";
        return Db::getConnection()->query($sql)->fetchAll();
    }
}

<?php

require_once 'db/Db.php';

class Category
{
    public function getCategories()
    {
        $sql = "SELECT * FROM `product`";
        //$sql = "SELECT id, name FROM category";
        return Db::getConnection()->query($sql)->fetchAll();
    }
}
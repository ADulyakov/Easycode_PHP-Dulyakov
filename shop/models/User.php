<?php
namespace shop\models;
use shop\db\Db;

class User
{
    public function getUser()
    {
        $sql = "SELECT id, name FROM user";
        return Db::getConnection()->query($sql)->fetchAll();
    }
}
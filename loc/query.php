<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

function getAuthorWithBookCount(){
//request

    $sql = "SELECT 
              `atr`.`id`, 
              `atr`.`name`,
              `atr`.`age`,
              COUNT(`ab`.`author_id`) AS `booksQuantity`             
            FROM `author` AS `atr`
            LEFT JOIN `author_book` AS `ab`
              ON `atr`.`id` = `ab`.`author_id`
            GROUP BY `atr`.`id`;
            ";

    return fetchAll($sql);
};
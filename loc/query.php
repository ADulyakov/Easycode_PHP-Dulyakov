<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db.php';

/**
 * @return array
 */

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


function getAuthor () {

    $authorID = $_GET['id'];

    $sql = "
		SELECT
        	`ab`.`author_id`,
        	`b`.`title`
        FROM `author_book` AS `ab`
        LEFT JOIN `books` AS `b`
        	ON `b`.`id` = `ab`.`book_id`
        WHERE `ab`.`author_id` = '{$authorID}';";

    return fetchAll($sql);

};

function addAuthor(){
    //$name = $_GET['author'];
    $name = trim ($_GET['author']);
    $name = addslashes($name);
    $age = $_GET['age'];
    $connectionObject = getDbConnection();
    $sql = "INSERT INTO `author` (`name`, `age`) VALUES ('$name','$age')";
    $addFromDB = mysqli_query($connectionObject, $sql );
    //return fetchAll($sql);
    return $addFromDB;
};

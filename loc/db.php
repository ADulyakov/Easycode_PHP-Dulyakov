<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

function getDbConnection(){

    $connectionObject = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($connectionObject) {
        echo '<br />';
        echo "connect to DB ok";
        echo '<br />';
    } else {
        echo '<br />';
        echo "file to connect DB";
        echo '<br />';
    };
    return $connectionObject;
};

/**
 * @param $sql
 * @return array
 */
function fetchAll($sql) {
    //receiving data
    $connectionObject = getDbConnection();
    
    $resource = mysqli_query($connectionObject, $sql);
    
    $rows = array();

//    while (true) {
//        $row = mysqli_fetch_assoc($resource);
//        if ($row === null) {
//            break;
//        }
//
//        $rows[] = $row;
//    }

    while ($row = mysqli_fetch_assoc($resource)) {
        $rows[] = $row;
    };

    return $rows;
};


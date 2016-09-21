<?php
///**
// * Created by PhpStorm.
// * User: dulyakov
// * Date: 07.09.16
// * Time: 2:20
// */
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//
//
//$str = "Ваше имя O'Reilly?";
//
//// выводит: Ваше имя O\'Reilly?
//echo $str;


$tableName = 'book';
$data = array(
    array(
        'name' => 'book1',
        'page_count' => 300
    ),
    array(
        'name' => 'book2',
        'page_count' => 400
    )
);

$keys = array();
$names = array();
$page_counts = array();

foreach ($data as $key => $array) {
    foreach ($array as $colum => $value){
        $keys[] = "`" .$colum. "`";
    };
    $names[] = "'" .$array['name']. "'";
    $page_counts[] ="'" .$array['page_count']. "'";
};


$colum = implode(",", $keys);
$values = implode(",", $value);



echo '<pre>';
print_r($value);
echo '</pre>';

function multiInsert($tableName, $data) {
    $keys = array();
    $names = array();
    $page_counts = array();

    foreach ($data as $key => $array) {
        foreach ($array as $colum => $value){
            $keys[] = "`" .$colum. "`";
        };
        $names[] = "'" .$array['name']. "'";
        $page_counts[] ="'" .$array['page_count']. "'";
    };


    $colum = implode(",", $keys);
    $values = implode(",", $value);
    
    
    $sql = "INSERT INTO `$tableName` ($colum) VALUE ($values) ";

    return $sql;

}


//SQL output:
// INSERT INTO `book` (`name`, `page_count`) VALUES ('book1', 300), ('book2', '400')
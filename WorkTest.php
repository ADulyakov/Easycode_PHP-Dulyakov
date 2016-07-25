<?php

echo 'Задачи: ';

echo 'Задача 1';
echo 'Написать функцию, которая принимает на вход массив с цифрами и возвращает 
      массив только с четными числами, если вторым аргументом передан true 
      или с не четными числами, если вторым аргументом передан false';
/**
 * Пример:
 * $array = [1, 2, 3, 4];
 * $oddElements = getEelements($array, true); // [2, 4]
 * $notOddElements = getElements($array, false); [1, 3]
 */

$numArr = array();
for ($i = 0; $i < 40; $i++ ){
    $numArr[] = $i;
};

function sortNumArr($array, $true, false){
    $true = true;
    $false = false;
    $evenElements = array();
    $oddElements = array();

//         foreach ($array as $value) {
//            if ($value % 2 == 0){
//                $evenElements[] = $value;
//            } elseif ($value % 2 == 1){
//                $oddElements[] = $value;
//            }
//        };
    $result = array();

    switch ($array) {
        case true:
            foreach ($array as $value) {
                if ($value % 2 == 0) {
                    $result[] = $value;
                }
            }
        case false:
            foreach ($array as $value) {
                if ($value % 2 == 1) {
                    $result[] = $value;
                }
            }

            return $result;
            print_r($oddElements);
    };


echo '<br />';
echo '<hr>';
echo '<br />';

//-------------------------------------------------------------------------------------//

echo '<br />';
echo 'Задача 2';
echo '<br />';
echo 'Написать функцию, которая принимает первым аргументом число означающее время месяца';
echo '<br />';
echo 'И возвращает строку с названием месяца';
echo '<br />';
/**
 * Пример:
 * $month = getMonth(1);
 * echo $mongth; // 'Январь'
 * $month = getMonth(13);
 * echo $month; // Такого месяца не существует!
 */

function getMonth($num){

    $month = array(1 =>'Січень', 2=> 'Лютий', 3=>'Березень', 4=> 'Квітень',
        5=> 'Травень', 6=> 'Червень', 7=>'Липень', 8=>'Серпень',
        9=>'Вересень',10=> 'Жовтень', 11=> 'Листопад',12=> 'Грудень');

    $result = '';

    foreach ($month as $key => $value){
        switch ($key){
            case $key == $num:
                $result = $value;
                break;
            case $key < $num :
                $result = 'Такого месяца не существует!';
                break;
        }
    };

    return $result;

};

$month = getMonth(14);
echo $month;

echo '<br />';
echo '<hr>';
echo '<br />';

//-------------------------------------------------------------------------------------//


echo 'Задача 3';
echo 'Написать функцию, которая принимает первым аргументом массив и подсчитывает
      среднюю цену у товаров';
/**
 * Пример:
 * $products = array(
 *     'product1' => array('price' => 100),
 *     'product2' => array('price' => 200),
 *     'product3' => array('price' => 300),
 *     'product4' => array('price' => 400),
 * );
 * $avgPrice = getAvgPrice($products);
 * echo $avgPrice; // 250
 */

$products = array(
    'product1' => array('price' => 100),
    'product2' => array('price' => 200),
    'product3' => array('price' => 300),
    'product4' => array('price' => 400),
);

function AvgPrice ($array) {
    $count = 0;
    $sumVal = 0;

    foreach ($array['product']['price'] as $value){
        $sumVal += $value;
        $count++;
    };

    $getAvgPrice = $sumVal / $count;

    return $getAvgPrice;

};


$avgPrice = AvgPrice($products);

echo $avgPrice;


echo '<br />';
echo '<hr>';
echo '<br />';

//-------------------------------------------------------------------------------------//
echo '<br />';
echo 'Задача 4';
echo '<br />';
echo 'Написать функцию, которая меняет местами в массиве ключи и значения';
echo '<br />';
/**
 * Пример:
 * $colors = array(
 *     'blue' => 'синий',
 *     'green' => 'зеленый',
 *     'yellow' => 'желтый',
 *     'red' => 'красный',
 * );
 * $rolledColors = rollElements($colors);
 * print_r($rolledCollors);
 * array(
 *     'синий' => 'blue',
 *     'зеленый' => 'green',
 *     'желтый' => 'yellow',
 *     'красный' => 'red',
 * )
 */

$month = array(
    'Январь' => 'January',
    'Февраль' => 'February',
    'Март' => 'March',
    'Апрель' => 'April',
    'Май' => 'May'
);

function rolledMonth ($array){

    $arrayFlipped = array_flip($array);
    return $arrayFlipped;
};

$action = rolledMonth($month);

echo '<pre>';
print_r($action);
echo '</pre>';




echo '<br />';
echo '<hr>';
echo '<br />';

//-------------------------------------------------------------------------------------//




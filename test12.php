<?php
//$array = array (1,2,3);
//
//for($i=0; $i < count($array); $i++ ) {
//
//    $result = $array[$i] * 2;
//
//    echo $result;
//
//
//}

$rand_array = [];
$ir = 0;

while ($ir < 50){
    $rand_array[] = rand (1,50);
    $ir++;
};
echo '<pre>';
print_r($rand_array);
echo '</pre>';
echo '<br />';
echo '<hr>';

$result = [];
foreach ($rand_array as $key => $value){
    if ($key % 5 == 0 ) {
        $result[] = $value;
    }
};

echo '<pre>';
print_r($result);
echo '</pre>';



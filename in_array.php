<?php
/*
$mas = array();

for ($i=0; $i <100; $i++){
    $mas[] = rand(1,100);
}

echo '<pre>';
print_r($mas);
echo '</pre>';
echo '<hr>';

if (in_array(35, $mas)) {
    echo '35 есть в массиве!';
} else {
    echo '35 нет в массиве!';
}

*/
$mas = array();

for ($i=0; $i <100; $i++){
    $mas[] = rand(1,100);
};

$mas2 = array();
for ($i=0; $i <100; $i++){
    $mas2[] = rand(1,100);
};


if (in_array(35, $mas) && in_array(35, $mas2)) {
    echo '35 есть в массиве!';
    }
    else {
    echo '35 есть в массиве2!';
}

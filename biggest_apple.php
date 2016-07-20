<?php

$bucketOfApples = array(2, 5, 8, 1, 12, 33, 1, 5, 2, 4, 9, 44, 3);

$biggestApple = $bucketOfApples[0];

foreach ($bucketOfApples as $currentApple) {
    $biggestApple <= $currentApple;
    if ($currentApple > $biggestApple) {
        $biggestApple = $currentApple;
    }
}
echo 'Самое большое яблоко: ' . $biggestApple;

//



for ($i=0; $i < 100; $i++){
    echo $i;
    echo '<br />';

}

<?php

$mass = array();

$i = 1;
while ($i <= 100) {
    $mass[] = rand(1, 100);
    $i++;
}
    foreach ($mass as $values){
        if ($values > 99 && $values <=100 ){
            echo $values;                   
        }
    }
        
        
/*    echo '<pre>';
    print_r($mass);
    echo '</pre>';*/

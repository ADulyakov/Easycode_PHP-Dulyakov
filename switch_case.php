<?php
$value = 6;
switch ($value) {
    case ($value > 4 && $value < 6): 
        echo 'Хожу в садик';
        break;
    case ($value > 6 && $value < 16):
        echo 'Хожу в школу';
        break;
    case ($value > 17 && $value < 23):
        echo 'Хожу в ВУЗ';
        break;
    case ($value > 23 && $value < 65):
        echo 'Хожу на работу';
        break;
    default: // else
        echo 'default';
}





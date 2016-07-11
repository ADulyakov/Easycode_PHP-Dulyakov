<?php
/*
Все задачи подразумевают самостоятельную генерацию массива со случайными числами.

1. Написать скрипт, который возводит число(к примеру 5) в 7 степень.

2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.

3. Найти сумму всех четных чисел в массиве

4. Найти среднее арифметическое всех чисел в массива

5. Получить среднее арифметическое всех чётных элементов массива, стоящих на нечётных местах.

6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.

7. Используя функцию in_array() проверить, сколько в массиве повторяющихся значений.

8. Есть 2 массива заполненные случайными числами. Использую in_array() функцию, посчитать сколько чисел из массива A есть в массиве B

9. Заменить в массиве все числа меньше 10 на 99910. Все числа которые больше или равны 10, но меньше  25 - заменить на 9991025. Все числа которые больше 25 и делятся на 2 заменить, заменить на 9992, а которые не делятся на 2 - заменить на 9991. Если в массиве встречается число 64 - прекратить обработку массива.

10. Найти максимальные элементы массива в заданных диапазаонах. К примеру:
Массив
$array = [1,2,9, 86,24,6, 45,72];

Диапазаоны:
1-10, 20-50, 50-100

Ответ:
диапазон 1-10: максимальное число - 9
диапазон 20-50: макс 45
диапазон 50-100: макс 86
*/

//--------------------------------------------------------------------//

//1. Написать скрипт, который возводит число(к примеру 5) в 7 степень.


// через функцию PHP '**'

$a = 5;
$b = 7;
$c = $a ** $b;

echo $c;

// или через цикл 'for'

$a =5;
$b =7;
$sum = $a;

for ($i = 1; $i < $b; $i++) {
    $sum *= $a;
}

echo $sum;

echo '<hr>';
echo '<br />';
echo '<hr>';


//--------------------------------------------------------------------//

// 2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и
// закончить обработку массива.

$mas = array();
$sum = 0;
$i=0;
while ($i<100){
    $mas[] =rand(1,100);
    $i++;
};
/*
echo '<pre>';
print_r($mas);
echo '</pre>';
echo '<hr>';
*/

$found = 37;

$mcount = count($mas);
for ($i=0; $i < $mcount; $i++) {
    foreach ($mas as $value) {
        if ($value == $found) {
            echo 'В массиве есть число: ' .$value;
            die();
        }
    }
};

echo '<hr>';
echo '<br />';
echo '<hr>';
//--------------------------------------------------------------------//

// 3. Найти сумму всех четных чисел в массиве

//--------------------------------------------------------------------//

//4. Найти среднее арифметическое всех чисел в массива
$mas = array();
$i=0;

while ($i<100){
    $mas[] = rand(1,100);
    $i++;
};

echo '<pre>';
print_r($mas);
echo '</pre>';
echo '<hr>';

$sum = 0;
$mcount = count($mas);
for ($a =0; $a <$mcount; $a++){
    foreach ($mas as $value) {
        $sum = ($sum + $value);

    }
}

echo 'Сумма массива: ' . $sum;
echo '<br />';
echo 'Средне арифметическое : ' . $sum / $mcount;

echo '<hr>';
echo '<br />';
echo '<hr>';

//--------------------------------------------------------------------//


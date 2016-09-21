<?php

class Human
{
    public $name;

    public $age;

    public $weight;




    public function printAge()
    {
        echo $this->age;
    }

    public function weight(){
        echo ', мой вес ' . $this->weight . 'кг.';
    }

    public function hello()
    {
        echo 'Привет!' . ' Меня зовут ' . $this->name;
        echo '. Мне ' . $this->age . ' года';

        //echo '<br />';
    }

    public function run() {
        echo ' Я умею бегать, ходить, ползать.. ';
    }


}

$john = new Human();
$john->name = 'John';
$john->age = 35; // $this->age = 35
$john->weight = 94;


$mike = new Human();
$mike->name = 'Mike';
$mike->age = 18; // $this->age = 18;

$john->hello();
$john->weight();
$john->run();
echo '<br />';
$mike->hello();


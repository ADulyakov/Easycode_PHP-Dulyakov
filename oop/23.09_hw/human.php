<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class Human
{
    public $name;

    public $age;


    public function printAge()
    {
        echo $this->age;
    }

    public function hello()
    {
        echo 'Привет!' . ' Меня зовут ' . $this->name;
        echo '. Мне ' . $this->age . ' года';
        echo '<br />';
    }

}
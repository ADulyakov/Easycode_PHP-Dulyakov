<?php

class Bird
{

    public $name;
    public $age;
    public $type;
    public $breed;
    public $properties;


   public function printName() {
        $this->name;
    }
   public function printAge() {
        $this->age;
   }
   public function printType() {
       $this->type;
   }
   public function printProperties() {
        $this->properties;
   }

   public function printBreed() {
        $this->breed;
   }

};

$bullet = new Bird();
$bullet->type = 'сокол';
$bullet->breed = 'степная пустельга' ;
$bullet->name = 'пуля';
$bullet->age = 2;
$bullet->properties = 'охотник, хищник';




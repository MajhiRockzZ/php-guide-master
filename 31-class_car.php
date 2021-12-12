<?php

class Car
{
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function moveWheels()
  {
    // echo 'Wheels Move' . '<br/>';
    $this->wheels = 10;
  }

  function createDoors()
  {
    $this->doors = 6;
  }
}

//if (class_exists('Car')) {
if (method_exists('Car', 'moveWheels')) {
  echo "Yeah!" . '<br/>';
} else {
  echo "No!" . '<br/>';
}

$bmw = new Car();
$truck = new Car();

//$mercedes_benz = new Car();
//$bmw->moveWheels();
//$mercedes_benz->moveWheels();
//$bmw->moveWheels();

$bmw->wheels = 8;
echo $bmw->wheels . '<br/>';
echo $truck->wheels = 10 . '<br/>';
$truck->createDoors();
echo $truck->doors . '<br/>';

echo '<hr/>';

class Animal
{
  var $color;
  var $legs;
  var $tail = 1;
  var $sound;

  function makeSound()
  {
    $this->sound = 'Woof';
  }
}

$dog = new Animal();
$dog->color = 'black';
$dog->legs = 4;
echo $dog->color . '<br/>';
echo $dog->legs . '<br/>';
echo $dog->tail . '<br/>';
$dog->makeSound();
echo $dog->sound . '<br/>';

<?php
class Car
{
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function __construct()
  {
    echo $this->wheels = 10 . '<br/>';
  }

  // function moveWheels()
  // {
  //   $this->wheels = 10;
  // }

  // function createDoors()
  // {
  //   $this->doors = 6;
  // }
}

// class Plane extends Car
// {
//   var $wheels = 20;
// }

// if (!class_exists('Plane')) {
//   echo 'Plane class does\'nt exist!';
// }

// $jet = new Plane();
// $jet->moveWheels();
// echo $jet->wheels;

$bmw = new Car();
$truck = new Car();

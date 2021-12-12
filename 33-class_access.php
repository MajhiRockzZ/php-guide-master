<?php
class Car
{
  public $wheels = 4;
  protected $hood = 1;
  private $engine = 1;
  var $doors = 4;

  function showProperty()
  {
    echo $this->engine . '<br/>';
  }
}

$bmw = new Car();
// echo $bmw->showProperty();

class Semi extends Car
{
}

$semi = new Semi();
$semi->showProperty();

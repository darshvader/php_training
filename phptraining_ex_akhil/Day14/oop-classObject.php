<?php
class Car {
  // Properties
  public $model;
  function set_name($model){
    $this->car = $model;
  }
}
$bmw = new Car();
$bmw->set_name("BMW");

echo $bmw->car;
?>
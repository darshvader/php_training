<?php 


class Car {
    public $model;
    public $color; 

    public function __construct($model, $color){
        $this->model = $model;
        $this->color = $color;
    }
    
    public function info(){
        echo "This Car is {$this->model} and color is {$this->color}";
    }
    
}

// Interitence
class Suv extends Car {
  public function message(){
    echo "I have a Car";
  }
}

$car = new Suv("BMW", "Black");
$car->info();


?>


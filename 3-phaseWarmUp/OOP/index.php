<?php
class Car {
    public $maker;
    public $model;
    public $year;


    public function __construct($maker, $model, $year){
        $this->maker = $maker;
        $this->model = $model;
        $this->year = $year;
    }

    public function carDetails(){
        echo "Car Details:<br>";
        echo "Maker:" . $this->maker . "<br>";
        echo "Model:" . $this->model . "<br>";
        echo "Year:" . $this->year . "<br>";
    }
}

$newCar = new Car("Ford", "Mustange Boss 1", "1969");

$newCar->carDetails();

?>
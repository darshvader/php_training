<?php

interface Vehicle {
    public function calculateFuelEfficiency();
    public function displayInfo();
}

class Car implements Vehicle {
    private $maker;
    private $model;
    private $year;
    private $fuelEfficiency;

    public function __construct($maker, $model, $year, $fuelEfficiency) {
        $this->maker = $maker;
        $this->model = $model;
        $this->year = $year;
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function calculateFuelEfficiency() {
        return $this->fuelEfficiency;
    }

    public function displayInfo() {
        echo "Car Details:<br>";
        echo "Make: " . $this->maker . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Fuel Efficiency: " . $this->fuelEfficiency . " mpg<br>";
    }
}

class Bicycle implements Vehicle{
    private $brand;
    private $type;

    public function __construct($brand, $type){
        $this->brand = $brand;
        $this->type = $type;
    }

    public function calculateFuelEfficiency() {
        return "Infinite"; 
    }

    public function displayInfo(){
        echo "Bicycle Details:<br>";
        echo "Brand:" . $this->brand . "<br>";
        echo "Type:" . $this->type . "<br>";
        echo "Fuel Efficiency: Infinite (Bicycles are human-powered)<br>";
    }
}

$newCar = new Car("Ford", "Mustang Boss 1", "1969", 15);

$newCar->displayInfo();
echo "Fuel Efficiency: " . $newCar->calculateFuelEfficiency();

$newBicycle = new Bicycle("Giant", "Mountain"); 

$newBicycle->displayInfo();
echo "Fuel Efficiency:" . $newBicycle->calculateFuelEfficiency();
?>

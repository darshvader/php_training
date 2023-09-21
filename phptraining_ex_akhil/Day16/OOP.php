<?php 
// Overriding methods

// class Animal {
//     protected $name;

//     public function __construct($name){
//         $this->name = $name;
//     }

//     public function getName(){
//         return $this->name;
//     }

//     public function speak(){
//         return "Animal sound";
//     }
// }

// class Dog extends Animal{
//     public function speak(){
//         return "Bow";
//     }
// }

// class Cat extends Animal{
//     public function speak(){
//         return "Meow";
//     }
// }

// $dog = new Dog("Sandy");
// $bat = new Animal("bat");
// $cat = new Cat("Priyanka");

// echo $bat->getName() . " says " . $bat->speak(). "<br>";
// echo $cat->getName() . " says " . $cat->speak();

// $file = fopen("data.txt", "r") or die ("unable to die");
// $read = fgets($file);
// echo file_get_contents($read);


interface Vehicle{
    public function calculateFuel();
    }
    
    class Car implements Vehicle{
    private $fuelEffCar;
    
    public function __construct($fuelEffCar){
    $this->fuel = $fuelEffCar;
    }
    
    public function calculateFuel(){
     return $this->fuel;
    }
    }
    
    class Bicycle implements Vehicle{
    private $fuelEffBicycle;
    
    public function __construct($fuelEffBicycle){
    $this->fuelBicycle = $fuelEffBicycle;
    }
    
    public function calculateFuel(){
    return $this->fuelBicycle;
    }
    
    }
    
    $car = new Car(25);
    $bicycle = new Bicycle(30);
    
    echo  $car->calculateFuel();
    echo "<br>";
    echo  $bicycle->calculateFuel();
?>
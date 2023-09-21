<?php 
// Object Orinented Programming - Inheritance , Encapsulation and Polymorphism

interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    private $sound;
    public function makeSound(){
        return "Woof!";
    }
}

class Cat implements Animal {
    public function makeSound(){
        return "Meow!";
    }
}

$dog = new Dog("Tommy");
$cat = new Cat("kitty");


?>
<?php

interface DogInterface {
    public function bark();
}
interface AnimalInterface {
    public function eat();
}
class Dog implements DogInterface, AnimalInterface {
    public function bark() {
        echo "Woof!<br>";
    }
    public function eat() {
        echo "EAt! <br>";
    }
 }
$dog = new Dog();
$dog->bark();

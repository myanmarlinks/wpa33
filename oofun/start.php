<?php

$dog = new Dog();
$dog->name = "Aung Net";
$dog->bark();
unset($dog);
$dogTwo = new Dog();
$dogTwo->name = "Puppy";
$dogTwo->bark();
class Dog extends Animal {
    function __construct() {
        echo "Construct <br>";
    }
    function bark() {
        echo "WOOF! <br>";
    }
    function __destruct() {
        echo "Destruct! <br>";
    }
}




?>
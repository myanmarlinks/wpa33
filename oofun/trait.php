<?php
trait Sapian {
    function dance() {
        echo "DANCE! <br>";
    }
}
trait Test {
    function __construct() {
        echo "Test contruct! <br>";
    }
    function test() {
        echo "TEST! <br>";
    }
}
abstract class Animal {
    public $name;
    function eat() {
        echo "EAT! <br>";
    }
}
class Cat extends Animal { 
    use Sapian, Test;
}

$cat = new Cat();
$cat->dance();
$cat->test();

?>
<?php
trait Sapian {
    function dance() {
        echo "DANCE! <br>";
    }
}
trait Another {
    public $constant = "123123123";
}
trait Test {
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
    use Sapian;
    use Test;
    use Another;
}
$cat = new Cat();
$cat->dance();
$cat->test();
?>
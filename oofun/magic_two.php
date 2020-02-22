<?php
class TestClass {
    public static $api = "werwerwer";
    public function __call($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }
    public static function __callStatic($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }
    public static function goo() {
        echo "Goo! <br>";
    }
}
echo TestClass::$api;
TestClass::goo();
TestClass::foo("bar", "boo", "faw");
$testClass = new TestClass();
$testClass->dance("hip hop", "snoop dogg");
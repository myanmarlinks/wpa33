<?php
class MagicTest {
    public $name;
    public $data = [];
    public function __construct() {
        echo "MagicTest Con! <br>";
    }
    public function __set($key, $value) {
        $this->data[$key] = $value;
    }
    public function shout(string... $name) {
        foreach($name as $n) {
            echo "Idiot " . $n . "<br>";
        }
    }
    public function __get($key) {
        return $this->data[$key];
    }
    public function __destruct() {
        echo "MagicTest Des! <br>";
    }
}
$magicTest = new MagicTest();
$magicTest->color = "Blue <br>";
echo $magicTest->color;
$magicTest->shout("Aung Aung", "Maung Maung", "Ba");

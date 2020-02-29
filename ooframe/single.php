<?php
// Singlegon Patter
class StaticChain {
    public static $_instance;
    public $value;
    public static function start($value) {
        if(!self::$_instance instanceof StaticChain) {
            self::$_instance = new StaticChain();
        }
        self::$_instance->value = $value;
        return self::$_instance;
    }
    public function __construct() {
        echo "Static Chain Construct! <br>";
    }
    public function __destruct() {
        echo "Static Chain Desstruct! <br>";
    }
    public function sum($value) {
        $this->value += $value;
        return $this;
    }
    public function minus($value) {
        $this->value -= $value;
        return $this;
    }
    public function multiply($value) {
        $this->value *= $value;
        return $this;
    }
    public function divide($value) {
        $this->value /= $value;
        return $this;
    }
    public function result() {
        return $this->value . "<br>";
    }
}
$value = StaticChain::start(45)
->sum(56)
->minus(5)
->multiply(2)
->divide(2)
->result();
echo $value;
$value = StaticChain::start(67)->result();
echo $value;
$value = StaticChain::start(87)->result();
echo $value;
$value = StaticChain::start(97)->result();
echo $value;
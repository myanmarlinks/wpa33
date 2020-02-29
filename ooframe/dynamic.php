<?php
class Dynamic {
    public $value = 0;
    public function __construct($value) {
        $this->value = $value;
        return $this;
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
        return $this->value;
    }
}
$dyn = new Dynamic(56);
$val = $dyn->sum(56)
    ->minus(40)
    ->multiply(2)
    ->divide(2)
    ->result();
echo $val;



<?php
interface CEOInterface {
    public function order();
}
class CEO implements CEOInterface {
    public function order() {
        echo "Order! <br>";
    }
}
class Manager {
    private $ceo;
    public function __construct(CEOInterface $ceo) {
        $this->ceo = $ceo;
    }
    public function manage() {
        echo "Manage! <br>";
    }
    public function order() {
        $this->ceo->order();
    }
}
$ceo = new CEO();
$manager = new Manager($ceo);
$manager->manage();
$manager->order();
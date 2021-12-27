<?php
class Circle {
    public $radius = 5;
    public $color;
    
    //thiet lap gtri thuoc tinh
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    //tra ve gtri thuoc tinh
    public function getRadius() {
        return $this->radius;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
    public function calculateArea() {
        return pi()*pow($this->radius, 2);
    }
    public function toString() {
        echo $this->calculateArea();
    }

}
class Cylinder extends Circle {

}

$circle = new Circle();
//truy cap phuong thuc thong qua doi tuong
$circle->toString();



?>
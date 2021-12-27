<?php

class Point {
    //khai bao thuoc tinh 
    public $x = float;
    public $y = float;

    //khai bao phuong thuc
    public function __construct(float $x, float $y) {

    }
    //khai bao phuong thuc get()
    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function setX(float $x) {
        $this->x = $x;
    }
    public function setY(float $y) {
        $this->y = $y;
    }
    public function setXY(float $x, float$y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY() {
        return $this->xy = $
    }
    public function toString() {

    }
    


}


class MoveablePoint extends Point {
    //khai bao thuoc tinh 
    public $xSpeed = float;
    public $ySpeed = float;

    //khai bao phuong thuc
    public function __construct(float $xSpeed, float $ySpeed) {}
    public function getXSpeed() {
        return $this->XSpeed;
    }
    public function setXSpeed() {
        $this->XSpeed = $XSpeed;
    }
    public function getYSpeed() {
        return $this->ySpeed;
    }
    public function setYSpeed() {
        $this->YSpeed = $YSpeed;
    }
    public function getSpeed() {
        return $this->Speed;
    }
    public function move() {

    }
    public function toString() {

    }
}






?>
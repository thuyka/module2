<?php
class QuadraticEquation {
    // khởi tạo 4 thuộc tính
    private $a = 1;
    private $b = 2;
    private $c = 1;
    private $delta;


    //khởi tạo 7 phương thức để lấy giá trị thuộc tính
    function getA() {
        return $this->a;
    }
    function getB() {
        return $this->b;
    }
    function getC() {
        return $this->c;
    }

    //các phương thức + tính toán và trả kết quả
    //tinh delta
    function getDiscriminant() {
        $this -> delta =  ($this->b * $this->b - (4 * $this ->a * $this->c));
        return $this -> delta;
    }
    //tính r1
    function getRoot1() {
        return (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this ->a);
    }
    //tính r2 
    function getRoot2() {
        return (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this ->a);
    }

    //phương thức trả kết quả
    function getResult() {
        $this->getDiscriminant();
        if($this->delta > 0) {
            echo  $this->getRoot1().'<br>';
            echo  $this->getRoot2();
        }
        else if($this->delta == 0) {
            echo  $this->getRoot1().'<br>';
        }
        else {
            echo 'The equation has no roots';
        }
    }
}

//tạo đối tượng obj
$obj = new QuadraticEquation();
//gọi phương thức thông qua đối tượng
$obj -> getResult();
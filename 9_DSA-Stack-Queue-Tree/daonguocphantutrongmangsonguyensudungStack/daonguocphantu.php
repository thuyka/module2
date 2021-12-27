<?php

class Stack {
    //khai bao thuoc tinh
    public $stack = [];

    //khai bao phuong thuc construc
    public function __construct($stack) {
        $this->stack = $stack;
    }
    //khai bao phuong thuc push()
    public function push($item) {
        array_unshift($this->stack, $item);
    }
    //khai bao phuong thuc pop()
    public function pop() {
        return array_shift($this->stack);
    }

}
//khoi tao doi tuong
$objstack = new Stack([]);
$objstack->push(1);
$objstack->push(2);
$objstack->push(3);
$objstack->push(4);

$objstack->pop();
echo '<pre>';
print_r($objstack);
echo '</pre>';

?>

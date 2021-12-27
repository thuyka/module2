<?php

class Stack {
    //khai bao thuoc tinh
    public $limit ;
    public $stack ;

    //khai bao phuong thuc construc
    public function __construct($limit) {
        $this->limit = $limit;
        $this->stack = [] ;
    }

    // Thêm 5 phần tử vào stack dưới dạng phương thức push
    public function push($item){
        array_unshift($this->stack,$item);
    }

    /* xóa 1 phần tử trong ngắn xếp ở đây chúng ta Lấy ra lần lượt 3 phần tử
     và giữ nguyên các phần tử trong mảng */
    public function pop() {
        return array_shift($this->stack);
    }

    //lấy ra phần tử đầu tiên của ngăn xếp trên cùng của mảng
    public function top(){
        return current($this->stack);
    }
    //ktra phan tu o trong mang
    public function isEmpty(){
        if (count($this->stack) == $this->limit){
           return true;
        } else {
            return false;
            // return array_shift($this->stack);
        }
    }
}
$stack = new Stack(5);
$stack->push("1");
$stack->push("2");
$stack->push("3");
$stack->push('4');
$stack->push('5');
$stack->pop();
$stack->pop();
$stack->pop();
$stack->push('Thuy');
$stack->push('Ka');
var_dump($stack->isEmpty());
$stack->pop();
$stack->top();
$stack->top();
$stack->top();
var_dump($stack->isEmpty());
echo "<pre>";
print_r($stack);
echo "</pre>";
?>

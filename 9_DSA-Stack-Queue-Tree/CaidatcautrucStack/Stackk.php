<?php
class Stack {
    //khai báo thuộc tính
    public $limit;
    public $stack = [];
    //khai báo phương thức
    public function __construct($ts_limit)
    {
        $this->limit = $ts_limit;
    }
    //thêm phần tử vào mảng
    public function push($item){
        array_unshift($this->stack,$item) ;
    }
    //lấy phần tử trong mảng
    public function pop(){
        return array_shift($this->stack);
    }
    //kiểm tra xem rỗng  hay không
    public function  isEmpty(){
        if (count($this->stack) == 0){
            return true;
        } else {
            return false;
        }
    }
}
//khởi tạo lớp
$stackk = new Stack(5);
//thêm  phần tử trong mảng
$stackk->push(1);
$stackk->push(2);
$stackk->push(3);
$stackk->push(4);
$stackk->push(5);

echo "<pre>";
print_r($stackk);
echo "</pre>";

echo '<hr>';

$numbers = [];
while( $stackk->isEmpty() == false ){
    $pop = $stackk->pop();//5 4 3 2 1 
    $numbers[] = $pop;
}

foreach ($numbers as $key => $number){
    $stackk->push($number);
}



echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "<hr>";

// //kiểm tra xem mảng rỗng hay không
// var_dump($stackk->isEmpty());
// //lấy phần tử trong mảng
// var_dump($stackk->pop());

//kiểm tra
echo "<pre>";
print_r($stackk);
echo "</pre>";
?>
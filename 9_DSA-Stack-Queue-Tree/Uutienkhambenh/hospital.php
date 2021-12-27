<?php

class Patient
{
    public $name;
    public $code;
}

class Node {
    public $value = [];
    public $next;
    public function __construct($name, $code) {
        $this->value['name'] = $name;
        $this->value['code'] = $code;
    }
}
class Queue {
    public $front   = null;
    public $back    = null;
    //kiểm tra dữ liệu có trống hay không
    public function isEmpty() {
        return is_null($this->front);
    }
    //thêm dữ liệu vào queue
    public function enqueue($name, $code) {
        $oldback    = $this->back;
        $node       = new Node($name, $code);
        $this->back = $node;
        if ($this->isEmpty()) {
            $this->front    = $this->back;
        } else {
            $oldback->next  = $this->back;
        }
    }
    //lấy dữ liệu ra khỏi queue
    public function dequeue() {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue   = $this->front->value;
        $this->front    = $this->front->next;
        return $removedValue;
    }
    //đọc danh sách
    public function readList() {
        $listData = array();
        $current = $this->front;
        while ($current != null) {
            array_push($listData, $current->value);
            $current = $current->next;
        }
        return $listData;
    }
}
//khởi tạo đối tượng queue từ lớp Queue
$queue = new Queue();
$queue->enqueue('Smith', 5);
$queue->enqueue('Jones', 4);
$queue->enqueue('Fehrenbach', 6);
$queue->enqueue('Brown', 1);
$queue->enqueue('Ingram', 1);
$queue->dequeue();
$queue->readList();         //đọc danh sách
$lists = $queue->readList(); // gán danh sách cho biến $lists
echo '<pre>';
print_r($lists);
echo '</pre>';

//tạo mảng arr mới sau đó gộp các danh sách lại với nhau theo chỉ số
$arr = [];
foreach ($lists as $index => $list) {
    $arr[$list['code']][] = $list;
}
echo '<hr>';
ksort($arr);            // sắp xếp mảng theo chỉ số (code)
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';

/*
//tạo mảng eq_list sau đó gộp mảng $arr trên thành mảng, khi đó số danh sách bệnh nhân
là độ dài của mảng eq_list này. vì các phần tử dữ liệu đã được sắp xếp theo chỉ số ở trên
=> lúc này các bệnh nhân sẽ được sắp xếp dựa theo chỉ số (code)
từ 5, 4, 6, 1, 1
=> 1, 1, 4, 5, 6
*/
$eq_list = [];
foreach ($arr as $code => $new_array) {
    foreach ($new_array as $key => $new_eq_list) {
        $eq_list[] = $new_eq_list;
    }
}
echo '<pre>';
print_r($eq_list);
echo '</pre>';
echo "<hr>";
?>
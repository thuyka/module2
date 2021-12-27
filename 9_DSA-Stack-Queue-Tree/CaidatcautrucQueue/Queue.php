<?php
class Node {
    public $value;
    public $next;

    public function __construct() {

    }
}

class Queue {
    private $front = null;
    private $back = null;

    //để kiểm tra Queue  có rổng hay k ?
    public function isEmpty() {
        if (is_null($this->front) == $this->back) {
            return true;
        }
        return false;
    }
    //thêm 1 phần tử vào trong hàng đợi
    public function enqueue($value) {
        $oldBack = $this->back;         //khởi tạo biến oldBack nhận giá trị phía sau của queue(tức $this->back)
                 
        $this->back = new Node();       //khởi tạo đối tượng $this->back từ lớp Node ở trên
        $this->back->value = $value;    //truy cập thuộc tính value của class Node từ đổi tượng $this->back
        if ($this->isEmpty()) {         //gọi isEmpty để kiểm tra $this->front có trống hay không
            $this->front = $this->back; //nếu trống thì chuyển con trỏ phía trước đến vị trí đằng sau và chuyển con trỏ từ front sang back
        } else {
            $oldBack->next = $this->back;   // ngược lại nếu có dữ liệu thì gán $next của thuộc tính cho vị trí đằng sau
        }
    }
    //enqueue để lấy ra phần đầu của Queue
    public function  dequeue() {
        if ($this->isEmpty()){  // gọi ismpty kiểm tra dữ liệu  có rổng hay k
            return null;        // trả về null nếu không có dữ liệu
        }
        $removedValue = $this->front->value; // nếu có thì gán dữ liệu cần xóa ($this->front->value) cho biến $removedvalue
        $this->front  = $this->front->next; //sau đó gán giá trị đầu tiên cho đang sau nó 
        return $removedValue;   //trả về giá trị vừa xóa => lấy giá trị ra khỏi  queue;
    }
}
$objQueue = new Queue();
$objQueue->enqueue("start");
$objQueue->enqueue(1);
$objQueue->enqueue(2);

// $objQueue->dequeue();

$objQueue->enqueue(3);
$objQueue->enqueue(4);
$objQueue->enqueue("end");


$objQueue->dequeue();

echo "<pre>";
print_r($objQueue);
echo "</pre>";
<?php
class Dancer{
    public $name;
    public $gender;

    public function __construct($name, $gender) {
        $this->name = $name;
        $this->gender = $gender;
    }
}
//hàng chờ nam
$queueNam = new SplQueue();
//hàng chờ nữ
$queueNu = new SplQueue();
//tạo 1 số dancer nam và nữ vào hàng chờ
$queueNam->enqueue(new Dancer('Bo', 'Nam'));
$queueNam->enqueue(new Dancer('An', 'Nam'));
$queueNam->enqueue(new Dancer('Bi', 'Nam'));
$queueNam->enqueue(new Dancer('Nam', 'Nam'));
$queueNu->enqueue(new Dancer('Mi', 'Nữ'));
$queueNu->enqueue(new Dancer('Nu', 'Nữ'));
$queueNu->enqueue(new Dancer('Ha', 'Nữ'));
$pairs = [];        //arraylist
$nam_waiting = [];  //hàng chờ còn lại
$nu_waiting = [];   //hàng chờ còn lại
while (!$queueNu->isEmpty() || !$queueNam->isEmpty()){//
    if(!$queueNu->isEmpty() && !$queueNam->isEmpty()){
        $pairs[] = $queueNam->dequeue()->name .' và '.$queueNu->dequeue()->name;
        //isEmpty -> kiểm tra xem có dữ liệu hay không nếu không có dữ liệu thì trả về true
        // nếu có dữ liệu thì trả về false
    }elseif($queueNu->isEmpty() && !$queueNam->isEmpty()){
        $nam_waiting[] = $queueNam->dequeue()->name;
    }elseif(!$queueNu->isEmpty() && $queueNam->isEmpty()){
        $nu_waiting[] = $queueNu->dequeue()->name;
    }
}
foreach ($pairs as $key => $value){
    echo "Cặp nhảy $value <br>";
}
echo 'Còn ' . count($nam_waiting) . ' dancer nam đang ở trong hàng chờ <br>';
echo 'Còn ' . count($nu_waiting) . ' dancer nữ đang ở trong hàng chờ';
// echo '<pre>';
//     print_r($pairs);
//     print_r($nam_waiting);
//     print_r($nu_waiting);
// echo '</pre>';

?>


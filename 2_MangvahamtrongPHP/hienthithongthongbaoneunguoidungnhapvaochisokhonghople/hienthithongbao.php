<?php


$number = array(14, 36, 56, 30, 11, 69, 43, 81, 11, 92, 27, 61, 26, 82, 12, 92, 68, 86, 91, 61, 12, 13, 9, 22, 44, 17, 52, 29, 18, 19, 51, 3, 70, 22, 34, 49, 28, 35, 8, 83, 46, 40, 12, 66, 11, 57, 20, 0, 3, 93, 60, 35, 99, 77, 36, 40, 6, 51, 73, 32, 90, 20, 81, 66, 78, 82, 7, 51, 72, 24, 29, 22, 57, 14, 94, 43, 65, 76, 48, 83, 88, 11, 78, 78, 73, 40, 80, 50, 83, 26, 28, 56, 22, 15, 73, 94, 93, 38, 95, 40);
$value = 0;
echo implode(" ", $number)."<br>"; 
//imlode: in mảng dưới dạng string bởi gtri trong chuỗi, vd:trong chuỗi lag khoảng cách
    // nếu $value < 0 hoặc $value > 100
    if ($value < 0 || $value > 100) {
        try {// thử đưa ra 1 ngoại lệ
            throw new Exception("Số không hợp lệ"); 
        } catch (Exception $e) {     // bắt ngoại lệ(kiểm tra xem điều kiện trong if có thuộc ngoại lệ không)
            echo $e->getMessage();  // nếu điều kiện thuộc ngoại lệ (tức value < 0 or value > 100) 
                                   //thì hiển thị message
        }
    }
    //nếu không thuộc ngoại lệ (tức value từ 0  - 100) 
    echo 'Vị trí '. $value. ' ở trong mảng có giá trị là: '.$number[$value];



?>


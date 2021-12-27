<?php
//sap xep noi bot
// $arr = [5, 9, 6, 4, 7, 3, 8, 2];
// // for ($i=0; $i<count($arr)-1; $i++) {        //n là count arr
// //     for ($j=count($arr)-1; $j>$i; $j--) {
// //         if ($arr[$j] < $arr[$j-1]) {
// //             $t = $arr[$j-1];
// //             $arr[$j-1] = $arr[$j];
// //             $arr[$j] = $t;
// //         }
// //     }
// // }
// // foreach ($arr as $key => $value) {
// //     echo $value;


// // // echo '<pre>';       //(khi dùng echo'<pre>' để coder ktra)
// // // print_r($arr);
// // // echo '</pre>';






//sap xep chen
$arr = array(8, 6, 22, 34, 5, 40, 11, 1, 23, 44, 18);
//           0  1   2   3   4  5  6   7   8   9  10
for ($i = 1; $i < count($arr); $i++) {
    //gán $arr[$i] cho biến trung gian temp // $arr[$i] = 6
    $temp = $arr[$i]; //temp = 6
    //khởi tạo biến $j = $i - 1
    $j = $i - 1; //$j = 1 - 1 = 0
    //trường hợp khi $j >=0 và giá trị $arr[$j] > biến trung gian temp
    while ($j >= 0 && $arr[$j] > $temp) { //($j>=0 và giá trị 8($arr[$j]) > 6($temp))
        //$arr[$j + 1] = $arr[$j];
        //$arr[1]    = 6
        //$arr[0]    = $temp(6);
        $arr[$j + 1] = $arr[$j];
        $j--; // để kiểm tra trường hợp tiếp theo, khi $j = 0(tức ở vị trí index = 0) thì dừng
    }
    //lúc temp mang giá trị 8(lớn hơn giá trị của vị trí bên trái)
    // thực hiện gán giá trị liền kề = temp
    $arr[$j + 1] = $temp;
}

foreach ($arr as $key => $value) {
    echo $value . " ";
}

<?php
//mangr đã được sắp xếp trước khi tìm kiếm
//không sắp xếp trước khi không thực hiện được tìm kiếm nhị phân
$arr = [5, 6, 9, 15, 18, 19, 33, 35, 44, 47];
    //  0  1  2  3    4   5   6   7   8   9
    //

$find   = 33;
$left   = 0;
$right  = count($arr) - 1;  //10-1=9

//lần thứ nhất
$mid = ($left + $right) / 2;     //interger
//$mid = (int) $mid;
$mid = floor($mid);

//if ($arr [$mid] == $find) {
//}

//$arr[$mid] = 18;
if ($arr [$mid] > $find) {
    $mid    = $mid +1;  //5
    $left   = $mid;    //5
}
//lần thứ hai
$mid = floor( ($left + $right) /2);  //interger


// $left  = 5;
// $right = 9;
// $mid   = 7;
// $arr[$mid] = 35;
// $find = 33;
// //$arr = [-, -, -, -, -, 19, 33, -, -, -];
// //        -  -  -  -  -  5    6  -  -  -  

if( $arr[$mid] > $find ){
    //$left = 5;
    $right= $mid - 1; //6
}elseif( $arr[$mid] < $find ){
    $mid  = $mid + 1; //5
    $left = $mid ;  //5
}

//lan thu 3
/*
//$arr = [ - , -, -,  -,  -, 19, 33, -, -, -];
//         -   -  -   -   -   5   6   -   -   -
$right = 6;
$left = 5
*/
$mid    = floor( ( $left + $right ) / 2 ); // 5
/*
$arr[$mid] = 19;
*/
if( $arr[$mid] > $find ){
    //$left = 5;
    $right= $mid - 1; //6
}elseif( $arr[$mid] < $find ){
    $mid  = $mid + 1;//6
    $left = $mid;//6
}
//lan thu 4
//$arr = [ - , -, -,  -,  -, -, 33, -, -, -];
//         -   -  -   -   -   -   6   -   -   
/*
$left  = 6;
$right = 6;
*/
$mid   = floor( ( $left + $right ) / 2 ); // 6
if( $arr[$mid] > $find ){
    //$left = 5;  
    $mid    = $mid - 1;//6
    $right  = $mid; //6
}elseif( $arr[$mid] < $find ){
    $mid  = $mid + 1;//6
    $left = $mid;//6
}else{
    echo "Tim thay $find tai vi tri $mid";
}

echo '<br>';
echo $left;
echo '<br>';
echo $right;


?>
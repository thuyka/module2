<?php

$list = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
function insertionSort($list) {
    for ($i=0; $i < count($list); $i++) {
        $temp = $list[$i];
        $j = $i-1;
        while ($j >= 0 && $list[$j] < $temp) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $temp;
    }
    foreach ($list as $key => $value) {
        echo $value . " ";
    }
}
//gọi hàm 
insertionSort($list);

try {
    echo 5/0
} catch (\Throwable $th) {
    //throw $th;
}
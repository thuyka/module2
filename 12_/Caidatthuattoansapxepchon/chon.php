<?php

$list = [1, 9, 4.5, 6.6, 5.7, -4.5];
function selectionSort($list) {
    for ($i=0; $i< count($list); $i++) {
        $min = $i;
        for ($j = $i+1; $j <count($list); $j++) {
            if ($list[$j] < $list[$min]) {
                $min = $j;
            }
        }
        $list = swapPositions($list, $i, $min);
    }
    return $list;
}
function swapPositions($data, $left, $right ) {
    $temp = $data[$right];
    $data[$right] = $data[$left];
    $data[$left]  = $temp;
    return $data;
}
echo implode(',' ,selectionSort($list));

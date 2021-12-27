<?php
//khai bao mang
$array = [5,2,4,6,9,2,7,8,3];
//khai bao max 
$min = $array[0];
//duyet mang
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}
echo $min;
?>
 















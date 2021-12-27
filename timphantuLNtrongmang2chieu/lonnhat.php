<?php
$arrays = [
    [88,89,90,91],
    [1,2,3,4],
    [4,5,6,7],
    [8,9,10,11],
];
$max = $arrays [0][0];
for ($i=0; $i<count($arrays); $i++) {
    for ($j=0; $j<count($arrays[0]); $j++) {
        if ($arrays[$i][$j] >$max) {
            $max = $arryay[$i][$j];
        }
    }
}
echo $max;
?>
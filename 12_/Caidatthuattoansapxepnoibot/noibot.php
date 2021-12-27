<?php
$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
function bubbleSort($list) {
    for ($i = 0; $i < count($list); $i++) {
        for ($j = count($list) -1; $j > $i; $j--) {
            if ($list[$j] < $list[$j-1]) {
                $t = $list[$j-1];
                $list[$j-1] = $list[$j];
                $list[$j] = $t;
            }
        }
    }
    foreach ($list as $key => $value) {
        echo $value;
        echo "<br>";
    }
}
bubbleSort($list);

?>
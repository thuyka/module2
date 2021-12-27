<?php
$arrays = [
    [5, 1, 6, 4, 9],
    [8, 4, 9, 5, 1],
    [6, 2, 0, 9, 4],
    [3, 5, 1, 7, 2],
    [0, 4, 8, 3, 6]
];
$hang_ngang1 = 0; $hang_ngang2 = 0; $hang_ngang3 = 0; $hang_ngang4 = 0; $hang_ngang0 = 0;
$hang_doc1 = 0; $hang_doc2 = 0; $hang_doc3 = 0; $hang_doc4 = 0; $hang_doc0 = 0; 
$duong_cheo = 0;
for ($i = 0; $i < count($arrays); $i++) {
    $duong_cheo += $arrays[$i][$i];
    for ($j = 0; $j < count($arrays[0]); $j++) {
        if ($i == 0) {
            $hang_ngang0 += $arrays[$i][$j];
        }
        if ($i == 1) {
            $hang_ngang1 += $arrays[$i][$j];
        }
        
        if ($i == 2) {
            $hang_ngang2 += $arrays[$i][$j];
        }
        
        if ($i == 3) {
            $hang_ngang3 += $arrays[$i][$j];
        }
        
        if ($i == 4) {
            $hang_ngang4 += $arrays[$i][$j];
        }
        if ($j == 0) {
            $hang_doc0 += $arrays[$i][$j];
        }
        if ($j == 1) {
            $hang_doc1 += $arrays[$i][$j];
        }

        if ($j == 2) {
            $hang_doc2 += $arrays[$i][$j];
        }
        if ($j == 3) {
            $hang_doc3 += $arrays[$i][$j];
        }

        if ($j == 4) {
            $hang_doc4 += $arrays[$i][$j];
        }

    }
}
echo "Hàng ngang có giá trị bằng: ".$hang_ngang0.'<br>';
echo "Hàng ngang có giá trị bằng: ".$hang_ngang1.'<br>';
echo "Hàng ngang có giá trị bằng: ".$hang_ngang2.'<br>';
echo "Hàng ngang có giá trị bằng: ".$hang_ngang3.'<br>';
echo "Hàng ngang có giá trị bằng: ".$hang_ngang4.'<br>';
echo "Hàng dọc có giá trị bằng: ".$hang_doc0.'<br>';
echo "Hàng dọc có giá trị bằng: ".$hang_doc1.'<br>';
echo "Hàng dọc có giá trị bằng: ".$hang_doc2.'<br>';
echo "Hàng dọc có giá trị bằng: ".$hang_doc3.'<br>';
echo "Hàng dọc có giá trị bằng: ".$hang_doc4.'<br>';
echo "đường chéo chính có giá trị bằng ".$duong_cheo; 


?>
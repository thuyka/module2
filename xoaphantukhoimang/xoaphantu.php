<?php
$index_del = 6;
$array = [10,4,6,7,8,6,0];
$pop = $array[0];
$newarray = [];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] != $index_del) {
        array_push($newarray, $array[$i]);
        
    }
}
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>



<?php
//cách khác----------------------------------------
// $arrays = [10, 4, 6, 7, 8, 6, 6, 6, 0];
// for ($i = 0; $i < count($arrays); $i++) {
//     if ($arrays[$i] == 8) {
//         array_splice($arrays, $i , 1);
//     }
// }
// echo "<pre>";
// print_r($arrays);
// echo "</pre>";


//ôn lại kiến thức script 
// <!-- <scrip>
// function removeFromArray(arr, x) {
//     var arrnew = [];
//     for (var i = 0; i <= arr.length; i++) {
//         if (arr[i] != x) {
//             arrnew.push(arr[i]);
//         }
//     }
//     return arrnew;
// }
// let arr = [1, 2, 3, 4, 5, 6];
// console.log(removeFromArray(arr, 3));
// </script>  -->
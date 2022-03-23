<?php
// array multidimensi
// array di dalam array

$array1 = [10, "fathia", false, [1,2,3]];
print_r($array1);
echo "<hr>";
echo $array1[1]; // array fathia
echo "<hr>";
echo $array1[3][1]; // array [1,2,3]
// kalo array ada lagi didalam array
// $array1 = [10, "fathia", false, [1,[2],3]];
// echo $array1[3][1][0];
echo "<hr>";
// matriks
/*
1 2 3
4 5 6
7 8 9
*/
$matriks = [
    [1,2,3] , 
    [4,5,6] , 
    [7,8,9]
];
echo "<br>"
foreach ($matriks as $baris) {  // melooping baris
    foreach ($matriks as $kolom) {
        echo $kolom;
    }
    echo "<br>";
} // melooping kolom
?>
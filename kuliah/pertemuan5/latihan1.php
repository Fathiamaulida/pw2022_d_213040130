<?php
// array adalah variabel yang dapat menyimpan banyak nilai sekaligus
//contoh variabel biasa
$hari1 = "senin";
// jika mau menambahkan berbagai hari maka bedakan variabel nya ( dari $hari bedakan ke $hari1),contoh :
$hari2 = "selasa";

//nama bulan
$bulan1 = "januari";
$bulan2 = "januari";

//membuat array
$hari = ["senin" , "selasa" , "rabu" , "kamis" , "jumat"]; // membuat array versi baru 
$bulan = array ("januari" , "pebruari" , "maret");  // array versi lama

// mencetak array 
// yang bisa mencetak echo adalah nilai
// menggunakan index , dimulai dari 0
echo $hari["0"];
echo "<br>";
echo $bulan[2];
echo "<br>";

//menggunakan var_dump() atau print_r()
var_dump($hari); // ditampilin secara lengkap
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak untuk user
// menggunakan looping
for ($i = 0; $i < 5; $i++) { // $i < 5 itu adalah banyaknya elemen dalam array yang sudah dibuat sebelumnya 
    echo $hari[$i];
    echo "<br>";

}

 //menggunakan foreach
 // pengulangan khusus ARRAY 
 foreach($bulan as $b) { //$b = bulan , sama saja
     echo $b;
     echo "<br>";
 }
//memanipulasi array 
// menambah 1 elemen di akhir 
$hari[] = " jumat";
$hari[] = " sabtu";
print_r($hari);
echo "<br>";

$bulan[] = "april";
$bulan[] = "mei";
print_r($bulan);
echo "<br>";

?>
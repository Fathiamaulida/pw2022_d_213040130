<?php
//function
//memanggil sebuah functiom didalam PHP untuk mengelola tanggal
//l= tampilkan hari saja
//d= tanggal saja
//M=bulan
//m=bulan dalam bentuk angka
//y=tahun
// website= php.net/manual/en/funcref.php 
    //echo date("l , d-M-y")
//date 
//untuk menampilkan tanggal dengan format tertentu

//time
//echo time();
//1646625034 nilai ini adalah detik yang sudah berlalu sejak 1 januari 1970
// UNIX timestamp / EPOCH time 
//echo date ("l" , time());
// kalau pengen tau 3hari atau 100 hari , kita menyuruh php yg hitung, contoh:
//echo date ( "l" , time()-60*60*24*100) 
// 60 = DETIK
// 60 = JAM
// 24 = 1 HARI
// 100 = HARI YANG PENGEN KITA TAHU

// FUNCTION mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun
//echo mktime(0,0,0,14,05,2002);

//kalau mau tau harinya
//echo date("l" , mktime(0,0,0,14,05,2002));

// strtotime
//masukkin format tanggal
//echo strtotime("14 may 2002");

// kalau mau masukkin hari 
//echo date("l" ,strtotime("14 may 2002"));

// ada beberapa function yang sering dipakai
// ini yang ada hubungannya dengan date / time
// - time ()
// - date ()
// - mktime()
// - strtotime()

// ini yang ada hubungannya dengan string 
// - strlen() = untuk menghitung panjang sebuah string
// - strcmp() = untuk menggabungkan dua buah string
// - explode() = untuk memecah sebuah string menjadi array
// - htmlspecialchars() = untuk menjaga kita dari orang yg masuk ke website kita kayak hacker

// yang ada hubungannnya dengan unility (bantuan)
// - var-dump() = untuk mencetak isi dari sebuah variabel
// - isset() = untuk mengecek sebuah variabel apakah variabel tsb sudah pernah dibuat atau belum dan akan menghasilkan nilai boolean (true or false)
// - empty() = untuk mengecek apakah variabel itu kosong atau tidak
// - die () = untuk memberhentikan program kita
// - sleep () = untuk memberhentikan sementara

// use-defined function = fungsi yg kita bikin sendiri



?>
<?php
    // get and post
    // get datanya dikirim lewat URL
    // post datanya dikirim lewat form
    // superglobals - yang udah dibikinin sama php
    // contoh superglobals
    //$nama = "Fathia"; // variabel global ini bisa dipake dimanapun kecuali variabel function 
    //echo $nama;

    //function cetakNama($x) { // paramenter
        //$nama = "Thia" // variabel lokal
        //return "Halo $nama";
    //}
    //echo cetakNama($nama); // argumen
//--------------------------------------------------------------------------------------------------------
     //$nama = "fathia"
     //function cetakNama($x);
     //return "halo $nama";
     //echo cetakNama($nama);
// -------------------------------------------------------------------------------------------------------
    // SUPERGLOBALS
    //variabel PHP yang bisa kita pakai dimanapun
    // bentuknya adalah Array assosiative
    // array assosiative = string
    //$_GET
    //$_POST
    //$_REQUEST
    //$_SERVER
    // WAJIB KAPITAL
//---------------------------------------------------------------------------------------------------------

    //echo $_GET = 
    //var_dump($_GET);

    // jika mau menampilkan seluruh local host
    //var_dump($_SERVER["SERVER_NAME"]);

//---------------------------------------------------------------------------------------------------------
    // Untuk memasukkan variabel array $_GET
    //$_GET = [
    // "nama" =>  " Fathia"
    //];
    //var_dump($_GET);

$_GET["nama"] = "Fathia";
$_GET["email"] = "Fathiamaulida12345@gmail.com";
var_dump($_GET);
?>

// contoh maksud pengiriman URL (GET)
//http://localhost/pw2022_d_213040130/kuliah/pertemuan7/latihan1.php?nama=Fathia&enail=Fathiamaulida@gmail.com
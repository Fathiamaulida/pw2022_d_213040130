// representasi data mahasiswa
<?php
$mahasiswa = [["Fathia maulida" , "213040130" , "Fathiamaulida145@gmail.com" , "Teknik Informatika"],
["nabila" , "213040140" , "nabiladoang@gmail.com" , "teknik informatika"],
["adam" , "213040000" , "adamdoang@gmail.com", "teknik informatika"],
["akbar" , "213040298" , "akbardoang@gmail.com" , "teknik informatika"]
];
print_r($mahasiswa);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li> Nama :<?php echo $mhs[0]; ?></li>
    <li> NPM : <?php echo $mhs[1]; ?></li>
    <li> Email : <?php echo $mhs[2]; ?></li>
    <li> Jurusan : <?php echo $mhs[3]; ?></li>
</ul>

<?php } ?>
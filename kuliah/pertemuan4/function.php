<?php
// definisikan dulu fungsinya,baru bisa dipanggil. contoh
function salam($waktu ,$nama) {
    return "selamat $waktu,$nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam("pagi" , "Fathia maulida"); ?> </h1>
</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
<!DOCTYPE html>
<html lang="en">
<head>
    <title>COBA GET</title>
</head>
<body>
    <!-- mengirim data menggunakan get-->
    <a href="latihan3.php?nama=Fathia">Kirim Data Nama</a>
    <hr>
     <!-- mengirim data menggunakan post-->
     <form action="latihan3.php">
         <label for="nama">Nama : </label>
         <input type="text" name="nama" id="nama">
     </form> <!-- action untuk mengirim datanya kemana--> 

    <h3> Login Form</h3>
    <form action="latiha3.php" method="post">
        <label for="username"> username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="paswsword">
        <br>
        <button type="submit">kirim</button>
    </form>
    
</body>
</html>

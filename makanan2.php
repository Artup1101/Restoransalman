<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Makanan</title>
    <link rel="stylesheet" type="text/css" href="makanan1.css">
</head>
<body>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:Halaman.php'); }
?>
    <h1 align ="center">Selamat Datang</h1>
    
    <div class="kotak_masuk">
		<p class="masuk">SILAHKAN MASUK</p>  
        <p class="masukk">
        <form action="prosesdaftar.php" method="post">
            <label>Username   : </label>
            <input type="text" name="username" class="masuk" placeholder ="Username"> <br>
            <label>Password   : </label>
            <input type="password" name="password" class="masuk" placeholder ="Password"><br>
            <button type="submit" class=tombol_masuk>Daftar</button><br><br></p>
        </form>
        <form action="makanan1.php" method="post">
            <button type="submit" class=tombol_masuk>Login</button>
        </form>    
    </div>

</body>
</html>
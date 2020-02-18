<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:Login.php'); 
} 
else { 
   $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" type="text/css" href="halaman.css">
</head>
<body>
<h1 align="center">Login Berhasil</h1>
<div class="yoamanta">
            <h2 align="center">Makanan</h2>
    <p> 1.  Pecel
    <br>
    2.  Rawon
    <br>
    3.  Tumpang
    <br>
    4.  Ayam geprek
    <br>
    5.  Ayam Goreng
</p>
<h2 align="center">Minuman</h2>
    <p> 1.  Jus
    <br>
    2.  Es Teh
    <br>
    3.  Es Jeruk
    <br>
    4.  Extra Joss
    <br>
    5.  Es susu
</p>
   
      </div>
    <div class='Aku' align='center'>
    <b>
   	<?php
   	echo $username;
   	?>		
   	</b>
   	<a href="Logout.php"><b>Logout</b></a>
</div>
</body>
</html>


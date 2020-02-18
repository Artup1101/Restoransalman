<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proses</title>
  <link rel="stylesheet" type="text/css" href="background.css">
</head>
<body>
<?php
   session_start();
   require_once("Untitled-1.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT *from restoranku where username = '$username'";
   $query = $connect->query($sql);
   $hasil = $query->fetch_assoc();

   if($query->num_rows == 0) {
     echo "<div align='center'>
     !!Akun Belum Terdaftar!! <br>
     <a href='makanan1.php'>Back</a></div>";
   } 

   else {
     if($password <> $hasil['password'] && $username <> $hasil['username']) {
       echo "<div align='center'>Username/Password salah! <br>
       <a href='makanan1.php'>Back</a></div>";
     } 

     else {
       $_SESSION['username'] = $hasil['username'];
       header('location:halaman.php');
     }
   }
?>
</body>
</html>
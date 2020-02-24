<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="background.css">
</head>
<body>

<?php
   require_once("Untitled-1.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT*from restoranku where username = '$username'";
   $query = $connect->query($sql);

   if($query->num_rows != 0) {
     echo "<div align='center'><h1>!!Akun Sudah Terdaftar!!</h1> 
     <a href='makanan1.php'>Back</a>
     </div>";
   } 
   else {
     if(!$username || !$password) {
       echo "<div align='center'>
       <h1>!!Data Tidak Lengkap</h1>
        <a href='makanan2.php'>Back</a>";
     } else {
       $data = "INSERT into restoranku (username, password) values ('$username', '$password')";
       $save = $connect->query($data);
       if($save) {
         echo "<div align='center'>
         <h1>!!REGISTER SUKSES!!<br></h1> 
         <a href='makanan1.php'>Login</a></div>";
       } else {
         echo "<div align='center'><h1>!!REGISTER GAGAL!!</h1></div>;
         <a href='makanan2.php'>daftar lagi</a></div>";
       }
     }
   }
?>
 
 </body>
</html>
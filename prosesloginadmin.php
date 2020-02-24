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
   $_SESSION['username'] = 'AdminGG';
   $_SESSION['password'] = 'Adminpro';   
   if(isset($_SESSION['login'])){
       if($_SESSION['username']=='AdminGG' && $_SESSION['password']='Adminpro'){
        header('location:halamanadmin.php');
    }else{
        echo "Maaf Anda Salah memasukkan username dan password admin";
        header('location:makanan1.php');
    }}

?>
</body>
</html>
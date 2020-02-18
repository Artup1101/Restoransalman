<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link rel="stylesheet" type="text/css" href="background.css">
</head>
<body>
<?php
   session_start();
   session_destroy();
?>

<div align="center">
  <h1>Anda telah logout</h1>
  <a href="makanan1.php">Login</a>
</div>
  
</body>
</html>
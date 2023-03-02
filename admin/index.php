<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    body{

        background: #bde62bea;
    }
        </style>
<body>
    <?php echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1><center><font color ='white'>Welcome " . $_SESSION['username'] . "</font></center></h1><br>"; ?>
<center><h1 style="font-size:30px; font-color:white;">Selamat Datang di Website Kami
    <a href="logout.php"><br>Logout</a></center></h1>
</body>
</html>
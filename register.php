<?php
include 'config.php';
if(isset($_POST["register"])){
    $username=strtolower(stripslashes($_POST["username"]));
    $password=mysqli_escape_string($conn, $_POST["password"]);
}

$cekuser=mysqli_query($conn, "SELECT username FROM login WHERE username='$username'");
if(mysqli_fetch_assoc($cekuser)){
    echo "<script>
    alert ('Sudah ada username yang sama');
    </script>";
    return false;
}
//password_hash($password, PASSWORD_DEFAULT);

$sql=mysqli_query($conn,"INSERT INTO login VALUES('','$username','$password')");

if($sql){
    header("location:index.php");
}else{
    mysqli_error($conn);
}

?>
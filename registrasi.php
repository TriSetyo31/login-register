<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="registrasi-style.css">
</head>
<body>
    <br>
    <center><h2>Form Registration</h2></center>
    <br>
    <div class="register">
        <form method="post" action="register.php" onsubmit="return validasi()">
            <div>
                <label>Username : </label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label>Password : </label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label>Tuliskan ulang Password : </label>
                <input type="password" name="password2" id="password2">
            </div>
            <div class="tombol">
                <button type="submit" name="register">REGISTRASI</button>
            </div>
        </form>
        Sudah punya akun? <a href="index.php">Login disini</a>
    </div>
<<script type="text/javascript">
    function validasi(){
        var username=document.getElementById("username").value;
        var password=document.getElementById("password").value;
        var password2=document.getElementById("password2").value;

        if(password!==password2){
            alert('password tidak sama');
            return false;
        }else{
            alert('berhasil registrasi');
            return true;
        }
    }
</script>
</body>
</html>

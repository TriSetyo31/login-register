<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <br>
    <center><h2>Form Login</h2></center>
    <br>
    <div class="login">
        <form method="post" action="login.php" onsubmit="return validasi()">
            <div>
                <label>Username : </label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label>Password : </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="tombol">
                <button type="submit" name="login">LOGIN</button>
            </div>
        </form>
        Belum punya akun? <a href="registrasi.php">Registrasi disini</a>
    </div>
<script type="text/javascript">
    function validasi(){
        var username=document.getElementById("username").value;
        var password=document.getElementById("password").value;
        
        if(username!=""&&password!=""){
            return true;
        }else{
            alert('Tolong diisi username dan passwordnya')
            return false;
        }
    }
</script>
</body>
</html>
<?php

require 'function.php';

if (isset($_POST["register"])) {

    if(tambahregis($_POST)>0){
        echo "
        <script>
        alert('Akun BERHASIL dibuat');
        document.location.href = 'login.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Akun GAGAL dibuat');
        document.location.href = 'login.php';
        </script>
        ";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div class="container">
    <div class="formulir-content">
    <form action="" method="POST">
    <table border="0" cellpadding = 10 cellspacing = 0 style:center; color: black>
        <h1>Registrasi</h1>

        <tr>
            <td><h3>Nama</h3></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" placeholder="Nama Lengkap anda" required></td>
        </tr>

        <tr>
            <td><h3>Username</h3></td>
            <td>:</td>
            <td><input type="text" name="username" id="username" placeholder="Username" required></td>
        </tr>

        <tr>
            <td><h3>Email</h3></td>
            <td>:</td>
            <td><input type="email" name="email" id="email" placeholder="Email" required></td>
        </tr>

        <tr>
            <td><h3>Password</h3></td>
            <td>:</td>
            <td><input type="password" name="password" id="password" placeholder="Password anda" required></td>
        </tr>

        <tr>
            <td><h3>jenis Kelamin</h3></td>
            <td>:</td>
            <td><label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label></td>
        </tr>
        </table>
        <div class = "button-login">
                <input type="submit" name="register" value="Register">
        </div>
    </form>
    </div>
    </div>
</body>
</html>
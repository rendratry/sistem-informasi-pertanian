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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/soft-design-system.css?v=1.0.4" rel="stylesheet" />
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
            <td><h6>Nama</h6></td>
            <td>:</td>
            <td><input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap anda" required></td>
        </tr>

        <tr>
            <td><h6>Username</h6></td>
            <td>:</td>
            <td><input class="form-control" type="text" name="username" id="username" placeholder="Username" required></td>
        </tr>

        <tr>
            <td><h6>Email</h6></td>
            <td>:</td>
            <td><input class="form-control" type="email" name="email" id="email" placeholder="Email" required></td>
        </tr>

        <tr>
            <td><h6>Password</h6></td>
            <td>:</td>
            <td><input class="form-control" type="password" name="password" id="password" placeholder="Password anda" required></td>
        </tr>

        <tr>
            <td><h6>jenis Kelamin</h6></td>
            <td>:</td>
            <td><label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label></td>
        </tr>
        </table>
        <div class = "button-login">
                <input class="btn btn-sm" type="submit" name="register" value="Register">
        </div>
    </form>
    </div>
    </div>
</body>
</html>
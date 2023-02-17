<?php

$conn = mysqli_connect('localhost','root','','db_agri',);
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_POST['username'];
$password=$_POST['password'];
 
$sql="SELECT * FROM tb_user WHERE username='$username' and password='$password'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
 
if($count==1){
echo "<script>window.location = 'index.php';</script>";
}
else {

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
    <title>Masuk</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div class= "container">
        <div class="formulir-content">
            <h1>Login</h1>
            <br>
            <form action="" method="post">
            <table border="0" cellpadding = 10 cellspacing = 0 style:center; color: black>

                <tr>
                    <td><h6>Username</h6></td>
                    <td>:</td>
                    <td><input class ="form-control" type="text" name="username" id="username" placeholder="Username anda" required></td>
                </tr>

                <tr>
                    <td><h6>Password</h6></td>
                    <td>:</td>
                    <td><input  class ="form-control"  type="password" name="password" id="password" placeholder="Password anda" required></td>
                </tr>
                <?php if (isset($error)):?>
                <p style="color=red; font-style:italic">Username atau password salah</p>
                <?php endif ?>
                <tr>
                    <td><a href="register.php">Register?</a></td>
            </table>
            </tr>
            <div class = "button-login">
                <input class= "btn btn-sm" type="submit" name="login" value="Login" >
            </div>

    </div>
</body>


<?php

include 'function.php';

if (isset ($_POST["login"])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tb_registrasi WHERE username = '$username'");

    if (mysqli_num_rows($result)){

        $rows = mysqli_fetch_assoc($result);

    if(password_verify($password, $rows["password"])){
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <td><h3>Username</h3></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username" placeholder="Username anda" required></td>
                </tr>

                <tr>
                    <td><h3>Password</h3></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password" placeholder="Password anda" required></td>
                </tr>
                <?php if (isset($error)):?>
                <p style="color=red; font-style:italic">Username atau password salah</p>
                <?php endif ?>
                <tr>
                    <td><a href="register.php">Register?</a></td>
            </table>
            </tr>
            <div class = "button-login">
                <input type="submit" name="login" value="Login">
            </div>

    </div>
</body>


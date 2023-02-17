<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query("SELECT * FROM tb_user WHERE username = '$username' and password = '$password'");
$check = mysqli_num_rows($query);
echo $check

?>
<?php
    $daerah =$_POST["daerah"];
    $No_ktp = $_POST['No_ktp'];
    $nama_petani = $_POST['nama_petani']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $luas_lahan = $_POST["luas_lahan"];
    $hasil_panen = $_POST["hasil_panen"];
    $modal = $_POST["modal"];
    $distribusi = $_POST["kelanjutan"];
    $kendala = $_POST["kendala"];
    $kritik = $_POST["kritik"];

?> 
<html> 
    <head> 
       <title>Thankyou!</title> 
    </head> 
    <link rel="stylesheet" href="stylesubmit.css">
    <body> 
        <div class="submit">
            <img src="thankyou.png" alt="">
        <h1>Terimakasih Sudah Mendaftar</h1>
        <h3>Berikut data yang anda masukkan :</h3> 
        <?php 
            echo $daerah;
            echo "<p>Nik : ".$No_ktp. "</p>";
            echo "<p>nama : ".$nama_petani. "</p>"; 
            echo "<p>username : ".$username. "</p>"; 
            echo "<p>email : ".$email. "</p>"; 
            echo "<p>".$luas_lahan;
            echo "<p>".$hasil_panen;
            echo "<p>".$modal;
            echo "<p>".$distribusi;
            echo "<p>".$kendala;
            echo "<p>".$kritik;
        ?> 
        <br>
        <h2>Cek Email anda untuk verifikasi</h2>
        </div>
  </body> 
 </html>
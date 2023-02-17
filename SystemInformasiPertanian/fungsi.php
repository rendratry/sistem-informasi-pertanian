<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['submit'])){

    $No_ktp = $_POST["No_ktp"];
    $nama_petani = $_POST["nama_petani"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $query = "INSERT INTO tb_datapetani VALUES
                ('', '$No_ktp', '$nama_petani', '$username', '$email')
            ";
    $result = mysqli_query($koneksi, $query);
    }if (!$result) {
            die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));        
        }
        else
        {
            echo "<script>
            alert('Data Berhasil Ditambah');window.location.href='index.php'</script>";
        }
        

 ?>
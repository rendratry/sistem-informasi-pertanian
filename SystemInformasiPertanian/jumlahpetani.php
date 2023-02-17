<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_agri");
$jumlah_petani   = mysqli_query($koneksi, "SELECT id, COUNT(id) AS jumlah_petani FROM tb_datapetani");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title>Jumlah Petani</title>
</head>
<body>

    <h2><?php ($p = mysqli_fetch_array($jumlah_petani));
        echo $p['jumlah_petani'] . ' Orang';?></h2>

</body>
</html>
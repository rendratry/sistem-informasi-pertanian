<?php

require 'function.php';

if (isset($_POST["submit"])) {

    if(tambah($_POST)>0){
        echo "
        <script>
        alert('Data BERHASIL ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Data GAGAL ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }

}

if (isset($_POST["submit"])) {

    if(tambah1($_POST)>0){
        echo "
        <script>
        alert('Data BERHASIL ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Data GAGAL ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }

}

if (isset($_POST["submit"])) {

    if(tambah2($_POST)>0){
        echo "
        <script>
        alert('Data BERHASIL ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Data GAGAL ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>
    Form data Pribadi
  </title>
</head>

<body class="g-sidenav-show bg-gray-100">
<div class = "container">
<div class="header">
        <h2>Agriculture</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </div>
<br>
<h2>Isi data diri anda dengan sebenar - benarnya</h2>
<br>
<form action="" method="post">
<div >
<p>Nama Daerah</p>
<select class="form-select" aria-label="Default select example" name = "daerah" id="daerah">
  <option selected>Nama Daerah (Kecamatan)</option>
  <option value="Mejayan">Mejayan</option>
  <option value="Balerejo">Balerejo</option>
  <option value="Pilangkenceng">Pilangkenceng</option>
  <option value="Wonoasri">Wonoasri</option>
</select>
</div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">NIK</label>
        <input type="number" class="form-control" name ="No_ktp" id="No_ktp" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name ="nama_petani" id="nama_petani" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Username</label>
        <input type="text" class="form-control" name ="username" id="username" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">email</label>
        <input type="email" class="form-control" name ="email" id="email" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Luas Lahan (dalam hektar)</label>
        <input type="number" class="form-control" name ="luas_lahan" id="luas_lahan" value="" required>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Hasil Panen (Kg)</label>
        <input type="number" class="form-control" name ="hasil_panen" id="hasil_panen" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Modal Pengeluaran</label>
        <input type="number" class="form-control" name ="modal" id="modal" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Kelanjutan distribusi</label>
        <input type="text" class="form-control" name ="kelanjutan" id="kelanjutan" placeholder="Dipakai Sendiri / Di Jual" value="" required>
    </div>
    <br>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Kendala dalam pertanian</label>
        <input class="form-control" type="text" name ="kendala" placeholder="Jabarkan kendala anda" id="kendala">
    </div>
    <br>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Kritik, Saran dan Masukan</label>
        <input class="form-control" type="text" name ="kritik" placeholder="Tulis kritik dan saran anda" value="" id="kritik">
    </div>
    <br>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Saya telah mengisi data dengan BENAR
      </label>
    </div>
  </div>
  <br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name ="submit" id="submit">Submit data</button>
  </div>
</form>
<br>
</div>

</body>

</html>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()</script>

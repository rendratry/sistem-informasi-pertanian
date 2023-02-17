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
  <title>
    Form data Pribadi
  </title>
</head>

<body>
<nav
class="navbar navbar-expand-lg navbar-light bg-white py-3">
<div class="container">
  <a class="navbar-brand text-black" href="index.php" rel="tooltip" title="" data-placement="bottom" target="_blank">
    Agriculture System
  </a>
  <a href="login.php" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 ms-auto d-lg-none d-block">Login</a>
  <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon mt-2">
      <span class="navbar-toggler-bar bar1"></span>
      <span class="navbar-toggler-bar bar2"></span>
      <span class="navbar-toggler-bar bar3"></span>
    </span>
  </button>
  <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
    <ul class="navbar-nav navbar-nav-hover mx-auto">
      <li class="nav-item mx-2">
        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="index.php">
          Home
        </a>
      </li>

      <li class="nav-item mx-2">
        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="about.php">
          About
        </a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="statistic.php">
          Statistik
        </a>
      </li>

      <li class="nav-item dropdown dropdown-hover mx-2">
        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="teknologi.php">
          Teknologi
        </a>
      </li>
    </ul>

    <ul class="navbar-nav d-lg-block d-none">
      <li class="nav-item">
        <a href="login.php" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1">Login</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<div class = "container">

<br>
<h2>Isi data diri anda dengan sebenar - benarnya</h2>
<br>
<form action="" method="post">
<div >
<label for="example-text-input" class="form-control-label">Nama Daerah (Kecamatan)</label>
<select class="form-select" aria-label="Default select example" name = "daerah" id="daerah">
  <option selected>Nama Daerah (Kecamatan)</option>
  <option value="Mejayan">Mejayan</option>
  <option value="Balerejo">Balerejo</option>
  <option value="Pilangkenceng">Pilangkenceng</option>
  <option value="Wonoasri">Wonoasri</option>
</select>
</div>
<br>
<div >
<label for="example-text-input" class="form-control-label">Nama Desa</label>
<select class="form-select" aria-label="Default select example" name = "desa" id="desa">
  <option selected>Nama Desa / Kelurahan</option>
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
        <div class="input-group mb-3">
        <input type="number" class="form-control" name ="luas_lahan" id="luas_lahan" value="" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2">Hektar</span>
        </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Hasil Panen (Kg)</label>
        <div class="input-group mb-3">
        <input type="number" class="form-control" name ="hasil_panen" id="hasil_panen" value="" aria-describedby="basic-addon2" required>
        <span class="input-group-text" id="basic-addon2">Kg</span>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="validationDefault01" class="form-label">Modal Pengeluaran</label>
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Rp</span>
        <input type="number" class="form-control" name ="modal" id="modal" value="" aria-describedby="basic-addon1" required >
        </div>
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
</div>
<footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <h6 class="text-gradient text-success font-weight-bolder">Agricultural Information Technology and System</h6>
          </div>
       
          <p class="copyright-text">Victor Tim</p>
        </div>

        <div class="d-flex justify-content-center mx-auto col-lg-7 col-md-7 ">
            <p class="mr-4">
                Copyright © <script>
                  document.write(new Date().getFullYear())
                </script> Develope by <a href="" target="_blank">Victor Team</a>.
              </p>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
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

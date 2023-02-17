<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="statistic.css">
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
    <title>Statistik</title>
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
<div class="container">
<br>
<br>
<h2>Statistik Pertanian Kabupaten Madiun</h2>
<br>
<br>
<div class="card">
      <div class="card-body">
        <h5 class="card-title">Jumlah Petani Di Kabupaten Madiun</h5>
        <iframe src="jumlahpetani.php" width="100%" height="600px" scrolling="no" allowfullsxreen></iframe>
      </div>
    </div>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Luas Lahan Pertanian Tiap Kecamatan (Hektar)</h5>
        <iframe src="luaslahan.php" width="100%" height="550px" scrolling="no" allowfullsxreen></iframe>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Panen Terbanyak (Kilogram)</h5>
        <iframe src="panenterbanyak.php" width="100%" height="550px" scrolling="no" allowfullsxreen></iframe>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
  <br>
  <div class="col-sm-11">
  <br>
  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Perbandingan Biaya Tanam dan Hasil Panen</h5>
        <iframe src="perbandingan.php" width="100%" height="980px" scrolling="no"></iframe>
      </div>
    </div>
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
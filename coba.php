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
</body>

</html>

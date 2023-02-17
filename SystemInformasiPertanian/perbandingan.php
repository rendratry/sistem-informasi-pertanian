<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_agri");
$daerah      = mysqli_query($koneksi, "SELECT daerah FROM tb_lahan GROUP BY daerah");
//$luas_lahan   = mysqli_query($koneksi, "SELECT daerah, SUM(luas_lahan) AS Luas FROM tb_lahan GROUP BY daerah");
$biaya = mysqli_query($koneksi, "SELECT daerah, SUM(modal) AS Luas FROM biaya_tanam GROUP BY daerah");
$hasil_panen = mysqli_query($koneksi, "SELECT daerah, SUM(luas_lahan) AS Luas FROM tb_lahan GROUP BY daerah");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diagram Batang Luas Lahan Pertanian Kab.Madiun</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="barchart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($daerah)) { echo '"' . $p['daerah'] . '",';}?>],
            datasets: [
            {
              label: "Luas Lahan Pertanian",
              data: [<?php while ($p = mysqli_fetch_array($luas_lahan)) { echo '"' . $p['Luas'] . '",';}?>],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193'
              ]
            }
            ]
            };

var biayaData = {
  label: 'Biaya Tanam',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 1)',
  yAxisID: "y-axis-density"
};
 
var hasilpanenData = {
  label: 'Hasil Panen',
  data: data,
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderColor: 'rgba(99, 132, 0, 1)',
  yAxisID: "y-axis-gravity"
};
 
var daerahData = {
  labels: [<?php while ($p = mysqli_fetch_array($daerah)) { echo '"' . $p['daerah'] . '",';}?>],
  datasets: [biayaData, hasilpanenData]
};
 
var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};
 
var barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: planetData,
  options: chartOptions
});
</script>
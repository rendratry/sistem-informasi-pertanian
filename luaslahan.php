<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_agri");
$daerah      = mysqli_query($koneksi, "SELECT daerah FROM tb_lahan GROUP BY daerah");
$luas_lahan   = mysqli_query($koneksi, "SELECT daerah, SUM(luas_lahan) AS Luas FROM tb_lahan GROUP BY daerah");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diagram Batang Luas Lahan Pertanian Kab.Madiun</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
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
                '#05668D',
                '#028090',
                '#00A896',
                '#02C39A',
                '#05668D'
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
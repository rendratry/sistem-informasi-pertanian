<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_agri");
$daerah      = mysqli_query($koneksi, "SELECT daerah FROM tb_lahan GROUP BY daerah");
$hasil_panen   = mysqli_query($koneksi, "SELECT daerah, SUM(hasil_panen) AS Panen FROM tb_lahan GROUP BY daerah");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panen terbanyak</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="piechart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($daerah)) { echo '"' . $p['daerah'] . '",';}?>],
            datasets: [
            {
              label: "Penjualan Barang",
              data: [<?php while ($p = mysqli_fetch_array($hasil_panen)) { echo '"' . $p['Panen'] . '",';}?>],
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

  var myPieChart = new Chart(ctx, {
                  type: 'doughnut',
                  data: data,
                  options: {
                    responsive: true
                }
              });

</script>
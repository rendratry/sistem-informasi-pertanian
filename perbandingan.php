<?php
$koneksi    = mysqli_connect("localhost", "root", "", "db_agri");
$daerah      = mysqli_query($koneksi, "SELECT daerah FROM tb_lahan GROUP BY daerah");
//$luas_lahan   = mysqli_query($koneksi, "SELECT daerah, SUM(luas_lahan) AS Luas FROM tb_lahan GROUP BY daerah");
$biaya = mysqli_query($koneksi, "SELECT daerah, SUM(modal) AS total_modal FROM tb_lahan GROUP BY daerah");
$hasil_panen = mysqli_query($koneksi, "SELECT daerah, SUM(hasil_panen) AS panen FROM tb_lahan GROUP BY daerah");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diagram Batang Luas Lahan Pertanian Kab.Madiun</title>
    <script src="js/Chart.js"></script>
  </head>
  <body>

    <div class="container">
        <canvas id="barchart" width="100" height="100"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
var ctx = document.getElementById("barchart").getContext("2d");
var biayaData = {
  label: 'Biaya Tanam',
  data:  [<?php while ($p = mysqli_fetch_array($biaya)) { echo '"' . $p['total_modal'] . '",';}?>],
  backgroundColor:'#05668D',
  yAxisID: "y-axis-biaya"
};
 
var hasilpanenData = {
  label: 'Hasil Panen',
  data: [<?php while ($p = mysqli_fetch_array($hasil_panen)) { echo '"' . $p['panen'] . '",';}?>],
  backgroundColor: '#02C39A',
  yAxisID: "y-axis-panen"
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
      id: "y-axis-biaya"
    }, {
      id: "y-axis-panen"
    }]
  }
};
 
var myBarChart = new Chart(ctx, {
   type: 'bar',
   data: daerahData,
  options: chartOptions
});
</script>
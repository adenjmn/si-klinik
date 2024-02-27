<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */

/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Report';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
$mysqli = new mysqli("localhost", "root", "", "inovamedika");

if ($mysqli->connect_error) {
  die("Koneksi ke database gagal: " . $mysqli->connect_error);
}

$query = "SELECT jenis_kelamin, COUNT(*) as total FROM pasien GROUP BY jenis_kelamin";
$result = $mysqli->query($query);
$data = array();
while ($row = $result->fetch_assoc()) {
  $data[$row['jenis_kelamin']] = $row['total'];
}

$mysqli->close();
?>

<h2>Pie Chart</h2>
<div class="container">
  <div class="col-lg-6">
    <h3>Grafis berdasarkan janis kelamin</h3>
    <canvas id="myChart" width="400" height="400"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var data = <?php echo json_encode($data); ?>;
  var labels = [];
  var dataset = [];
  for (var key in data) {
    if (data.hasOwnProperty(key)) {
      labels.push(key);
      dataset.push(data[key]);
    }
  }

  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        label: 'Jumlah Pasien',
        data: dataset,
        backgroundColor: [
          'rgba(54, 162, 235, 0.5)',
          'rgba(255, 99, 132, 0.5)', 
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });
</script>
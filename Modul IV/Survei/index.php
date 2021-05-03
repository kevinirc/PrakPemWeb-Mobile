<?php
include('connect.php');
$qfav = mysqli_query($koneksi, "SELECT *FROM favorit");
$rfav = mysqli_fetch_all($qfav, MYSQLI_ASSOC);

$qsel = mysqli_query($koneksi, "SELECT genre_buku AS 'Genre Buku',COUNT(genre_buku) AS 'Jumlah' FROM favorit GROUP BY genre_buku;");
$rsel = mysqli_fetch_all($qsel, MYSQLI_ASSOC);
?>

<html>
<head>
<script src="chart.js"></script>
<title>Survei</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class = "bd">
<h1>Grafik Jumlah Genre Buku Favorit</h1>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [<?php foreach ($rsel as $vsel) { echo "'".$vsel['Genre Buku']."',"; } ?>],
        datasets: [{
        label: 'Vote',
            data: [<?php foreach ($rsel as $vsel) {  echo "'".$vsel['Jumlah']."',";} ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive : false
    }
});
</script>
</div>

<div class="row">
  <div class="column">
    <div class="bd">
    <b>Tabel Favorit</b>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Genre Buku</th>
        </thead>
        <tbody>
            <?php foreach ($rfav as $vfav) { ?>
                <tr>
                    <td><?=  $vfav['No'] ?></td>
                    <td><?=  $vfav['Nama'] ?></td>
                    <td><?=  $vfav['Genre_Buku']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>    
    </div>
</div>

<div class="column">
<div class="bdd">
    <b>Tabel Jumlah Genre Buku Favorit</b>
    <br><br>
    <table border="1">
        <thead>
            <th>Genre Buku</th>
            <th>Jumlah</th>
        </thead>
        <tbody>
            <?php foreach ($rsel as $vsel) { ?>
                <tr>
                    <td><?=  $vsel['Genre Buku'] ?></td>
                    <td><?=  $vsel['Jumlah']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    </div>
</div>

</body>
</html>


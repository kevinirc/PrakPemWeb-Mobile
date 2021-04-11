<?php
include('connect.php');
$query =  mysqli_query($koneksi, "SELECT *FROM pegawai");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>

<head>
    <title>Tabel</title>
</head>

<body>
    
    <table border="1">
        <thead>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>ID Departemen</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php foreach ($result as $value) { ?>
                <tr>
                    <td><?= $value['ID_Pegawai'] ?></td>
                    <td><?=  $value['Nama_Pegawai'] ?></td>
                    <td><?=  $value['ID_Departemen']?></td>
                    <td><?=  $value['Alamat'] ?></td>
                    <td>
                        <a href="ubah.php?no=<?= $value['ID_Pegawai']?>">Edit</a>
                        <br>
                        <a href="hapus.php?no=<?= $value['ID_Pegawai']?>">Hapus</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    <nav>
        <a href="input.php">Input Data</a>
    </nav>
</body>

</html>
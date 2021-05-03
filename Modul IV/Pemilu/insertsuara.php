<?php
    include('connect.php');
    $idp = $_POST['IDPemilih'];
    $nmp = $_POST['NamaPemilih'];
    $pil = $_POST['Pilihan'];
    $query = mysqli_query($koneksi, "INSERT INTO suara VALUES ('$idp','$nmp','$pil')");

    if ($query) {
        header('Location:index.php');
    }else {
        echo 'Anda Sudah Memilih';
    }
?>
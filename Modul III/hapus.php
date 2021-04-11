<?php
    include('connect.php');
    $no = $_GET['no'];
    $delete = mysqli_query($koneksi, "DELETE FROM pegawai WHERE pegawai.ID_Pegawai = '$no'");
    if ($delete) {
        header('Location:tampilkan.php');
    } else {
        echo "File tidak ada";
    }
?>

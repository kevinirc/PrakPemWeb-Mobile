<?php

    include('connect.php');
    $nama = $_POST['nama'];
    $idp = $_POST['ID_Pegawai'];
    $idd = $_POST['ID_Departemen'];
    $alamat = $_POST['Alamat'];

    $query = mysqli_query($koneksi, "INSERT INTO pegawai set Nama_Pegawai='$nama', 
                                                             Alamat='$alamat',
                                                             ID_Pegawai='$idp',
                                                             ID_Departemen='$idd'");

    if ($query) {
        header('Location:tampilkan.php');
    }else {
        echo 'Input gagal';
    }
?>
<?php
include('connect.php');
$no = $_GET['no'];
$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE pegawai.ID_Pegawai = '$no' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<form action="update.php" method="POST">

    <input type="hidden" name="no" value="<?php echo $result[0]['ID_Pegawai']?>">
    <label>Nama</label><br />
    <input type="text" name="nama" value="<?php echo $result[0]['Nama_Pegawai'] ?>" />
    <br /><br />

    <label>Alamat</label><br />
    <input type="text" name="Alamat" value="<?php echo $result[0]['Alamat'] ?>" />
    <br /><br />

    <label>ID Pegawai</label><br />
    <input type="text" name="ID_Pegawai" value="<?php echo $result[0]['ID_Pegawai'] ?>" />
    <br /><br />
    
    <label>ID Departemen</label><br />
    <input type="text" name="ID_Departemen" value="<?php echo $result[0]['ID_Departemen'] ?>" />
    <br /><br/>
    <br/><br/>
    <button type="submit">Ubah</button>
</form>

</html>
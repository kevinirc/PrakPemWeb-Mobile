<?php
include('connect.php');

$qpemilih =  mysqli_query($koneksi, "SELECT IDPemilih AS 'ID Pemilih',NamaPemilih AS 'Nama Pemilih' FROM suara;");
$rpemilih = mysqli_fetch_all($qpemilih, MYSQLI_ASSOC);

$qsuara =  mysqli_query($koneksi, "SELECT Pilihan AS 'Pilihan',COUNT(Pilihan) AS 'Jumlah' FROM suara GROUP BY Pilihan;");
$rsuara = mysqli_fetch_all($qsuara, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemilu</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
<h1 align="center">PEMILIHAN KETUA OSIS SMA 2 DISANA</h1>

<div class = "bd">
<form action="insertsuara.php" method="POST">
        <label>ID Pemilih</label><br/>
        <input type="text" name="IDPemilih"/>
        <br/><br/>

        <label>Nama Pemilih</label><br/>
        <input type="text" name="NamaPemilih"/>
        <br/><br/>


        <label>Pilihan</label><br></br>
        <label>1</label>
        <button type="submit" name="Pilihan" value="Kevin">Kevin</button>
        

        <label>2 </label>
        <button type="submit" name="Pilihan" value="Immanuel">Immanuel</button>
        

        <label>3 </label>
        <button type="submit" name="Pilihan" value="Rui">Rui</button>
        

        <label>4 </label>
        <button type="submit" name="Pilihan" value="Costa">Costa</button>
        

        <label>5 </label>
        <button type="submit" name="Pilihan" value="KIRC">KIRC</button>
        
    </form>
    <br/><br/>
</div>

<div class="row">
  <div class="column">
    <div class="bd">
    <table border="1">
    <caption>HASIL</caption>
        <thead>
            <th>Nama Calon</th>
            <th>Jumlah</th>
        </thead>
        <tbody>
            <?php foreach ($rsuara as $vsuara) { ?>
                <tr>
                    <td><?=  $vsuara['Pilihan'] ?></td>
                    <td><?=  $vsuara['Jumlah']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>
    
<div class="column">
<div class="bdd">
    <table border="1">
    <caption>DAFTAR PEMILIH</caption>
        <thead>
            <th>ID Pemilih</th>
            <th>Nama Pemilih</th>
        </thead>
        <tbody>
            <?php foreach ($rpemilih as $vpemilih) { ?>
                <tr>
                    <td><?=  $vpemilih['ID Pemilih'] ?></td>
                    <td><?=  $vpemilih['Nama Pemilih']?></td>
                </tr>
            <?php } ?>
             </tbody>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>

    

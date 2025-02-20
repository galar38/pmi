<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <h3 align="right"><a href="login.php" align="right"><button style="height:40px; width:60px">LOGIN</button></a></h3>
    <h3 align="center">Selamat Datang Pada Halaman Permohonan Pelayanan Ambulans</h3>
</header>
<table align="center" border="1" class="kontak" width="400px">
    <tr>
        <th colspan="3">Kontak Person</th>
    </tr>
        <td align="center"><img src="suas.jpg" width="150px" height="150px" />Komang Suasana<br>
        <a href="https://wa.me/6281915715756"><button>No Whatsapp</button></a></td>
        <td align="center"><img src="daud.jpg" width="150px" height="150px" />Daud Puji Raharjo<br>
        <a href="https://wa.me/6281916294425"><button>No Whatsapp</button></a></td>
        <td align="center"><img src="pmi.jpg" width="150px" height="150px" />Kantor PMI Kab. Buleleng<br>
        <a href="tel: 0362 22348"><button>0362 22348</button></a></td>
    
</table>
<br>
<body>
    <?php
include ("pasien.php");

    ?>
    <main>
        <h3 align="center">
            Data Pasien yang Sudah Masuk
        </h3>
        <table align="center" border="1">
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Penyakit</th>
                <th>Lokasi Berangkat</th>
                <th>Lokasi Tujuan</th>
                <th>Tanggal</th>
            </tr>

            <?php

include("database.php");

$no=1;
$ambildata=mysqli_query($db, "SELECT * from pasien");
while ($tampil=mysqli_fetch_array($ambildata)) {
    echo 
    "<tr>
        <td align='center'>$no</td>
        <td align='center'>$tampil[nama]</td>
        <td align='center'>$tampil[umur]</td>
        <td align='center'>$tampil[alamat]</td>
        <td align='center'>$tampil[keperluan]</td>
        <td align='center'>$tampil[berangkat]</td>
        <td align='center'>$tampil[tujuan]</td>
        <td align='center'>$tampil[tanggal]</td>
    </tr>";

    $no++;
}
?>
        </table>
        <p align="center"><img src="Tarif.jpg" width="600px" align="center "/></p>
    </main>
</body>
</html>
<?php
include("database.php");
if (isset($_POST['ok'])) {
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $alamat = $_POST['alamat'];
  $keperluan = $_POST['keperluan'];
  $berangkat = $_POST['berangkat'];
  $tujuan = $_POST['tujuan'];
  $tanggal = $_POST['tanggal'];
  $sql = "INSERT INTO pasien (nama, umur, alamat, keperluan, berangkat, tujuan, tanggal) VALUE ('$nama','$umur','$alamat','$keperluan','$berangkat','$tujuan','$tanggal')";
  
  if ($db->query($sql)) {
      echo "Data Terkirim";}
      else { echo"Data Gagal Terkrim";}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
Terima Kasih Sudah Mengisi Data Pasien<br>
<body>
  Silahkan kembali dengan klik tombol dibawah
  <a href="index.php"><button style="height:40px; width:60px" >Kembali</button>
  </a>
</body>
</html>
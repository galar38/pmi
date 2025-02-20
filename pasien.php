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

 if (isset($_GET["nama"])) {
    mysqli_query($db,"delete from pasien where nama='$_GET[nama]'");
    echo "Data telah dihapus";
    echo"<meta http-equiv=refresh contect=2;URL=index.php";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script type="text/javascript">
       $(function() {
     $( "#input" ).datepicker({
     changeMonth: true,
     changeYear: true
     });
   });  
 </script>

    <title>Document</title>
</head>
<body>
    <h3 align="center">Silahkan Masukan Data Pasien</h3>
    <table align="center" border="2">
    <td>
        <form action="kembali.php" method="POST">
        <input type="text" placeholder="Nama Pasien" name="nama">
        <input type="number" placeholder="Umur" name="umur">
        <input type="text" placeholder="Alamat" name="alamat">
        <select class="" name="keperluan">
            <option value="Emergency">Emergency</option>
            <option value="Bawa Pasien">Bawa Pasien</option>
            <option value="Pasien Control">Pasien Kontrol</option>
            <option value="Jenazah">Bawa Jenazah</option>
            <option value="Penguburan">Penguburan</option>
            <option value="Kremasi">Ngaben/Kremasi</option>
            <option value="Penemuan">Penemuan</option>
        </select>
        <input type="text" placeholder="Lokasi Berangkat" name="berangkat">
        <input type="text" placeholder="Tujuan" name="tujuan">
        <input type="text" id="input" size="10" name="tanggal" value="mm/dd/yyyy" />
        <input type="submit" data-rel="back" name="ok" value="OK" onclick="href='kembali.php'">
    </form>
    </td>
    </table>
</body>
</html>
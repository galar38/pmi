<?php
include("database.php");

$register_massage = "";

if(isset($_POST["registrasi"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama     = $_POST["nama"];

    $sql = "INSERT INTO akun (username, password, nama) VALUES ('$username','$password','$nama')";

    if($db->query($sql)){
        $register_massage="Masok Pak Rekan";
    } else{
        echo "Gagal Cuy";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Driver? Silahkan Daftar
<form action="registrasi.php" method="POST">
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password">
    <input type="text" placeholder="Nama Anda" name="nama"><br>
    <button type="submit" name="registrasi"> DAFTAR </button>
</form>
    
</body>
</html>
<?php
include("database.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";

    $result = $db ->query($sql);

    if($result -> num_rows > 0){
        $data = $result->fetch_assoc();
        
        header("location: admin.php");

    }else{
    echo "Akun Tidak Ada";
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
<h3 align="right"><a href="index.php"><button align="center" style="height:40px; width:60px">HOME</button></a></h3>
<h3 align="center">Driver? Silahkan Login</h3>
<form align="center" action="login.php" method="POST">
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password"><br><br>
    <button align="left" type="submit" name="login"> LOGIN </button>
    <button><a href="registrasi.php">REGISTRASI</a></button>
</form>

    
</body>
</html>
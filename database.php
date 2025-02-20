<?php
$hostname="localhost";
$username= "root";
$password= "";
$dbname= "datapasien";

$db= new mysqli($hostname, $username, $password, $dbname);
if ($db->connect_error) {
    echo "Database error";
    die("Error". $conn->connect_error);
}
?>
<?php
$server = 'localhost';
$database = 'user';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Koneksi Gagal : " . mysqli_connect_error());
}
?>
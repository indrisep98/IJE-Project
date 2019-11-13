<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="ije";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
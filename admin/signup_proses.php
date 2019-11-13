<?php
session_start();
require "koneksi.php";


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

$sql="INSERT INTO tb_user VALUES (NULL, '$username', '$email', '$password'. '$level');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){
        echo "<script>
        alert('Proses Berhasil');
        window.location='login.php';
    </script>";
} else {
    echo " <script>
        alert('Proses Gagal');
        window.location='signup.php';
    </script>";
}

?>
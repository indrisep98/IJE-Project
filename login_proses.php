<?php
session_start();
require "koneksi.php";
$username= $_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM pelanggan WHERE username='$username' AND password ='$password'";

$proses=mysqli_query($koneksi, $sql);
$data=mysqli_fetch_array($proses);

if (!empty($data) && count($data)>0){
    echo"
    <script>
        alert('Login Berhasil');
        window.location='login/index.php';
    </script>";

    $_SESSION['username']=$username;
}else {
    echo"
    <script>
        alert('Login Gagal');
        window.location='IJE/login.php';
    </script>";

    unset($_SESSION['username']);
}


?>
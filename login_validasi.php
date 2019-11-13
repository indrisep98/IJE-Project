<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ceklogin_cus = mysql_query("SELECT * from pelanggan where username='$username' && password='$password'");
$datacus = mysql_fetch_array($ceklogin_cus);
$cekuser_cus = $datacus['username'];
$id_pelanggan = $datacus['id_pelanggan'];
 if ($cekuser_cus==$username) 
{
    session_start();
	$_SESSION['username'] = $username;
	$_SESSION['id_pelanggan'] = $id_pelanggan;
	header("location:login/index.php");	
}
else
{
	echo "Anda gagal melakukan login!!!";
	header("location:login.php?pesan=gagal");
}
?>
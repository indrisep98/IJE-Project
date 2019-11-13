<?php
session_start();
require "koneksi.php";



$username= $_POST['username'];
$password=$_POST['password'];

/**
if ($email == 'indrisep98@gmail.com' && $password=="123"){
		echo "Benar";
} else {
	echo "Salah";
}
*/
$sql="SELECT * FROM admin WHERE username='$username' AND password ='$password'";

$proses=mysqli_query($koneksi, $sql);
$data=mysqli_fetch_array($proses);

if (!empty($data) && count($data)>0){
	echo"
    <script>
    	alert('Login Berhasil');
        window.location='index.php';
    </script>";

	$_SESSION['username']=$username;
} else {
	echo"
    <script>
    	alert('Login Gagal');
        window.location='login.php';
    </script>";

	unset($_SESSION['username']);
}

?>
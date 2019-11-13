<?php
require "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$sql="INSERT INTO pelanggan VALUES (NULL, '$username', '$password', '$no_hp', '$email');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){
		echo "<script>
    	alert('Anda Berhasil Daftar! Harap Melakukan Login');
        window.location='login.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='register.php';
    </script>";
}

?>
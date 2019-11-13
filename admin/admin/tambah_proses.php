<?php
require "../header.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql="INSERT INTO admin VALUES (NULL, '$username','$password', '$email');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){

		echo "<script>
    	alert('Proses Berhasil');
        window.location='data_admin.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='tambah_admin.php';
    </script>";
}

?>
<?php
require "../header.php";
$id_admin=$_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE admin SET username ='$username', password='$password',email='$email', WHERE id_admin='$id_admin'";
$proses = mysqli_query($koneksi, $sql);

if ($proses){
		echo "<script>
    	alert('Data Berhasil DiUbah');
        window.location='data_admin.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='edit_admin.php';
    </script>";
}

?>
<?php
include"koneksi.php";
session_start();

$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$pesan = $_POST['pesan'];

$sql = "INSERT INTO `pesan_pelanggan` (`id_pelanggan`, `username`, `pesan`) VALUES ('$user_id', '$username', '$pesan');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){

		echo "<script>
    	alert('Proses Berhasil');
        window.location='chat.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='chat.php';
    </script>";
}

?>
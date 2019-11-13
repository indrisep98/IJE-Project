<?php
require "../header.php";

$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO `pesan_admin` (`id_pelanggan`, `nama`, `pesan`) VALUES ('$user_id', '$nama','$pesan');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){

		echo "<script>
    	alert('Proses Berhasil');
        window.location='data_chat.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='data_chat.php';
    </script>";
}

?>
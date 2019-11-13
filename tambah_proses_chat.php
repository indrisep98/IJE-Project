<?php
require "../header.php";

$id_pelanggan = $_POST['id_pelanggan'];
$pesan = $_POST['pesan'];

$sql="INSERT INTO pesan_admin VALUES (NULL,'$id_pelanggan', '$pesan');";
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
<?php
require "../header.php";

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql="INSERT INTO pesan_admin VALUES (NULL,'$id_pelanggan','$nama','$pesan');";
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
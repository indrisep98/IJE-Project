<?php
require "../header.php";

$id_pelang=$_GET['id_pelanggan'];
$sql="DELETE FROM pesan_admin WHERE id_pelanggan='$id_pelanggan';";
$proses=mysqli_query($koneksi,$sql);


if ($proses){
	echo "<script>
    	alert('Data Berhasil DiHapus');
        window.location='data_chat.php';
    </script>";
} else {
	echo "proses gagal";
}



?>

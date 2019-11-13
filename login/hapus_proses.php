<?php
include"koneksi.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../login.php");
}
$id_pelanggan=$_GET['id_pelanggan'];
$sql="DELETE FROM pesan_pelanggan WHERE id_pesan='$id_pesan';";
$proses=mysqli_query($koneksi,$sql);


if ($proses){
	echo "<script>
    	alert('Data Berhasil DiHapus');
        window.location='chat.php';
    </script>";
} else {
	echo "proses gagal";
}



?>

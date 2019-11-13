<?php
require "../header.php";

$id_admin=$_GET['id_admin'];
$sql="DELETE FROM admin WHERE id_admin='$id_admin';";
$proses=mysqli_query($koneksi,$sql);


if ($proses){
	echo "<script>
    	alert('Data Berhasil DiHapus');
        window.location='data_admin.php';
    </script>";
} else {
	echo "proses gagal";
}



?>

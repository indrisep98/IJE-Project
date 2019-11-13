<?php
require "../header.php";

$id_pemesanan=$_GET['id_pemesanan'];
$sql="DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan';";
$proses=mysqli_query($koneksi,$sql);

if ($proses){
	echo "<script>
    	alert('Data Berhasil DiHapus');
        window.location='data_pemesanan.php';
    </script>";
} else {
	echo "proses gagal";
}

?>

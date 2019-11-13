<?php
require "../header.php";

$id_produk=$_GET['id_produk'];
$sql="DELETE FROM produk WHERE id_produk='$id_produk';";
$proses=mysqli_query($koneksi,$sql);

if ($proses){
        echo "<script>
        alert('Proses Berhasil');
        window.location='data_produk.php';
    </script>";
    } else {
        echo "Proses Gagal";
}
?>
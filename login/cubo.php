<?php
session_start();
require "koneksi.php";
if (empty($_SESSION['username'])){
    echo"
    <script>
        window.location='../login.php';
    </script>";
	}
$id_pelanggan	= $_SESSION['id_pelanggan'];

$id_produk = $_GET['id_produk'];

$sql="INSERT INTO keranjang select id_pelanggan, harga_produk, total_harga, jumlah from produk where id_produk= '$id_produk'";
$proses = mysqli_query($koneksi, $sql);

if ($proses){

		echo "<script>
    	alert('Proses Berhasil');
        window.location='checkout.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='deskripsi.php';
    </script>";
}


	?>
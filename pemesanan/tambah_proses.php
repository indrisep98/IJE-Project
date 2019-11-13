<?php
require "../header.php";
$tgl_pemesanan = $_POST['tgl_pemesanan'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$total_harga = $_POST['total_harga'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$kiriman_barang = $_POST['kiriman_barang'];

$sql="INSERT INTO pemesanan VALUES (NULL, '$tgl_pemesanan', '$nama_produk', '$jumlah_produk', '$total_harga','$alamat_tujuan', '$kiriman_barang');";
$proses = mysqli_query($koneksi, $sql);

if ($proses){
		echo "<script>
    	alert('Proses Berhasil');
        window.location='data_pemesanan.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='tambah_pemesanan.php';
    </script>";
}

?>
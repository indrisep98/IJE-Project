<?php
require "../header.php";
$id_pemesanan=$_POST['id_pemesanan'];
$tgl_pemesanan = $_POST['tgl_pemesanan'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$total_harga = $_POST['total_harga'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$kiriman_barang = $_POST['kiriman_barang'];

$sql="UPDATE pemesanan SET tgl_pemesanan ='$tgl_pemesanan', nama_produk='$nama_produk',jumlah_produk='$jumlah_produk', total_harga='$total_harga', alamat_tujuan='$alamat_tujuan',kiriman_barang='$kiriman_barang' WHERE id_pemesanan='$id_pemesanan'";
$proses = mysqli_query($koneksi, $sql);

if ($proses){
		echo "<script>
    	alert('Data Berhasil DiUbah');
        window.location='data_pemesanan.php';
    </script>";
} else {
	echo " <script>
    	alert('Proses Gagal');
        window.location='edit_pemesanan.php';
    </script>";

?>
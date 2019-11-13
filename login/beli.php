<?php

include_once "inc.session.php";
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
include "koneksi.php";

// Program ini akan Dijalankan ketika Tombol BELI diklik, tombol BELI ada di halaman Produk Barang

$id_pelanggan	= $_SESSION['id_pelanggan'];
// Baca Kode Pelanggan yang Login

if(isset($_GET['id_produk'])) {
	// Baca Kode Barang yang dipilih
	$id_produk = $_GET['id_produk'];
	$id_pelanggan = $_GET['id_pelanggan'];
	
	// Baca data di dalam Keranjang Belanja	
	$cekSql = "SELECT * FROM keranjang WHERE id_produk='$id_produk' AND id_pelanggan='$id_pelanggan'";
	$cekQry = mysql_query($cekSql, $koneksidb) or die ("Cek data barang".mysql_error());
	if(mysql_num_rows($cekQry) >=1) {
		// Jika barang sudah pernah dipilih, maka update saja jumlah barangnya (+1)
		$mySql = "UPDATE keranjang SET jumlah=jumlah + 1 WHERE id_produk='$id_produk' AND id_pelanggan='$id_pelanggan'";

	}
	else {
		// Jika barang belum pernah dipilih, maka tambahkan baris baru ke keranjang
		$mySql = "SELECT * FROM produk WHERE id_produk='$id_produk'";
		$myQry = mysql_query($mySql, $koneksidb) or die ("Gagal ambil data barang".mysql_error());
		$myData = mysql_fetch_array($myQry);
		
		// Membaca data dari tabel Barang, untuk diinput ke tabel TMP
		$tanggal	= date('Y-m-d');
		// Simpan data ke TMP (Keranjang Belanja)
		$mySql	= "INSERT INTO keranjang (id_produk, id_pelanggan, harga_produk, total_harga, jumlah) 
					VALUES('$id_produk', '$id_pelanggan', '$harga_produk', '$total_harga', '1')";
	}
	
	// Menjalankan SQL di atas ( Update jumlah barang & Input barang baru ke TMP)
	$myQry = mysql_query($mySql, $koneksidb) or die ("Error".mysql_error());
	if ($myQry) {
		echo "<meta http-equiv='refresh' content='0; checkout.php'>";
	}
}

?>
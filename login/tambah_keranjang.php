<?php
include"koneksi.php";
session_start();
$id_pelanggan = $_SESSION['id_pelanggan'];
$q_aman = mysql_query("SELECT * from pemesanan where id_pelanggan='$id_pelanggan'");
$aman = mysql_num_rows($q_aman);
if($aman==0)

{
$id_produk = $_POST['id_produk'];
$qty = $_POST['jumlah'];
$harga_produk = $_POST['harga_produk'];
$total_harga = $qty*$harga;
$qrybuku = mysql_query("SELECT * from keranjang where id_produk='$id_produk'");
$q_stok = mysql_query("SELECT * from 
produk where id_produk='$id_produk'");

$data = mysql_fetch_array($qrybuku);
$idbuk = $data['id_produk'];
if($id_produk==$idbuk)
{
	$q_qty = mysql_query("SELECT * from keranjang where id_produk='$id_produk'");
	$data_qty = mysql_fetch_array($q_qty);
	$qty1 = $data_qty['jumlah'];
	$qty2 = $qty1 + $qty;
	$tot = $harga_produk * $qty2;
mysql_query("UPDATE keranjang set id_produk='$id_produk', id_pelanggan='$id_pelanggan',harga_produk='$harga_produk',total_harga='$total_harga' , jumlah='$qty2' where id_produk='$id_produk'");
header("location:checkout.php");
}

else{
mysql_query("INSERT into keranjang set id_produk='$id_produk', id_pelanggan='$id_pelanggan',harga_produk='$harga_produk',total_harga='$total_harga' , jumlah='$qty2'");
header("location:checkout.php");
}
}
else if($aman>=1)
{
	header("location:index.php?pesan=blok");
}
?>
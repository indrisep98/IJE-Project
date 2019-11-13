<?php

include"koneksi.php";
session_start();

$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$tanggal = $_POST['tanggal'];
$nama_penerima = $_POST['nama_penerima'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];
$no_telp = $_POST['no_telp'];
$deskripsi = $_POST['deskripsi'];
$sql = "INSERT INTO `pemesanan` (`id_pelanggan`, `tgl_pemesanan`, `nama_penerima`, `alamat`, `provinsi`, `kota`, `kode_pos`, `no_telp`, `deskripsi`) VALUES ('$user_id', '$tanggal', '$nama_penerima', '$alamat', '$provinsi', '$kota', '$kode_pos', '$no_telp', '$deskripsi');";
mysqli_query($koneksi, $sql);
$sql = "SELECT `id` FROM `pemesanan` ORDER BY `id` DESC LIMIT 1";
$orders = mysqli_query($koneksi, $sql);
$order = mysqli_fetch_object($orders);
$id_pemesanan = $order->id;
$orders = $_POST['cart'];

foreach ($orders as $cart) {
    $id_produk = $cart['product'];
    $jumlah = $cart['count'];
    $harga_produk = $cart['price'];
    $total_harga = $jumlah * $harga_produk;
    $sql = "INSERT INTO `keranjang` (`id_pemesanan`, `id_produk`, `harga_produk`, `total_harga`, `jumlah`) VALUES ('$id_pemesanan', '$id_produk', '$harga_produk', '$total_harga', '$jumlah')";
    mysqli_query($koneksi, $sql);
}

echo '
    <script>
        alert("Pesanan anda berhasil dikirim!");
        window.location = "pembelian.php";
    </script>
';

?>
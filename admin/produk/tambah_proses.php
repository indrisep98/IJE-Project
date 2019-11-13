<?php

session_start();
include '../koneksi.php';


$kategori_produk = addslashes($_POST['kategori_produk']);
$nama_produk = addslashes($_POST['nama_produk']);
$gambar_produk = addslashes($_FILES['gambar_produk']['name']);
$gambar_produk2 = addslashes($_FILES['gambar_produk2']['name']);
$gambar_produk3 = addslashes($_FILES['gambar_produk3']['name']);
$harga_produk = addslashes($_POST['harga_produk']);
$deskripsi1 = addslashes($_POST['deskripsi1']);
$deskripsi2 = addslashes($_POST['deskripsi2']);
$status = addslashes($_POST['status']);

move_uploaded_file($_FILES['gambar_produk']['tmp_name'], "uploads/".$_FILES['gambar_produk']['name']);
move_uploaded_file($_FILES['gambar_produk2']['tmp_name'], "uploads/".$_FILES['gambar_produk2']['name']);
move_uploaded_file($_FILES['gambar_produk3']['tmp_name'], "uploads/".$_FILES['gambar_produk3']['name']);

        $query=mysqli_query($koneksi,"INSERT INTO produk VALUES (NULL, '$kategori_produk','$nama_produk','$gambar_produk', '$gambar_produk2','$gambar_produk3', '$harga_produk', '$deskripsi1', '$deskripsi2', '$status');");
       if ($query) 
        {
            $_SESSION['id_produk'] = $query['id_produk'];
            echo "
            <script>
                alert('Data Produk Berhasil di Simpan');
                document.location.href ='data_produk.php';
            </script>
            ";
        }
            else 
            {
                echo "
                <script>
                    alert('Data Produk Gagal di Simpan !');
                    document.location.href ='tambah_produk.php';
                </script>";
            }


?>
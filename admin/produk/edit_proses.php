<?php
include '../koneksi.php';


$id_produk = addslashes($_POST['id_produk']);
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
$sql="SELECT * FROM produk WHERE id_produk='$id_produk';";
        $proses=mysqli_query($koneksi,$sql);
        $data=mysqli_fetch_array($proses);


  if(is_file("uploads/".$data['gambar_produk']))
      unlink("uploads/".$data['gambar_produk']);
  if(is_file("uploads/".$data['gambar_produk2']))
      unlink("uploads/".$data['gambar_produk2']);
  if(is_file("uploads/".$data['gambar_produk3']))
      unlink("uploads/".$data['gambar_produk3']);


        $query = mysqli_query($koneksi,"UPDATE produk SET kategori_produk = '$kategori_produk', nama_produk = '$nama_produk', gambar_produk = '$gambar_produk',gambar_produk2 = '$gambar_produk2',gambar_produk3 = '$gambar_produk3', harga_produk='$harga_produk', deskripsi1 = '$deskripsi1', deskripsi2 = '$deskripsi2', status = '$status' WHERE id_produk='$id_produk'");

  if ($query) {
        $_SESSION['id_produk'] = $query['id_produk'];
            echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='data_produk.php';
            </script>
            ";
        }
            else 
            {
                echo "
                <script>
                    alert('Data Gagal Diupdate !!!');
                    document.location.href ='edit_produk.php';
                </script>";
            }
?>
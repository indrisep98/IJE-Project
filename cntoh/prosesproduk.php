<?php
session_start();
include '../koneksi.php';

$nama = addslashes($_POST['nama']);
$foto1 = addslashes($_FILES['foto1']['name']);
$foto2 = addslashes($_FILES['foto2']['name']);
$foto3 = addslashes($_FILES['foto3']['name']);
$foto4 = addslashes($_FILES['foto4']['name']);
$harga = addslashes($_POST['harga']);
$ket = addslashes($_POST['ket']);

move_uploaded_file($_FILES['foto1']['tmp_name'], "../images/".$_FILES['foto1']['name']);
move_uploaded_file($_FILES['foto2']['tmp_name'], "../images/".$_FILES['foto2']['name']);
move_uploaded_file($_FILES['foto3']['tmp_name'], "../images/".$_FILES['foto3']['name']);
move_uploaded_file($_FILES['foto4']['tmp_name'], "../images/".$_FILES['foto4']['name']);

$query = mysqli_query($koneksi, "INSERT INTO produk VALUES('', '$nama', '$foto1', '$foto2', '$foto3', '$foto4', '$harga', '$ket')");

	if ($query) 
		{
			$_SESSION['id_produk'] = $query['id_produk'];
			echo "
            <script>
                alert('Data Produk Berhasil di Simpan');
                document.location.href ='../produk';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Produk Gagal di Simpan !');
		        	document.location.href ='../input';
		        </script>";
		    }
?>
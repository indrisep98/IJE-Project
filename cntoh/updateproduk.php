<?php
include '../koneksi.php';

$id_produk = addslashes($_POST['id_produk']);
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

    if(is_file("../images/".$data['foto1']))
      unlink("../images/".$data['foto1']);
    if(is_file("../images/".$data['foto2']))
      unlink("../images/".$data['foto2']);
    if(is_file("../images/".$data['foto3']))
      unlink("../images/".$data['foto3']);
    if(is_file("../images/".$data['foto4']))
      unlink("../images/".$data['foto4']);

$query = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', foto1='$foto1', foto2='$foto2', foto3='$foto3', foto4='$foto4', harga='$harga', ket='$ket' WHERE id_produk='$id_produk' ");

	if ($query) {
		$_SESSION['id_produk'] = $query['id_produk'];
			echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href ='../produk';
            </script>
            ";
		}
			else 
			{
		        echo "
		        <script>
		        	alert('Data Gagal Diupdate !!!');
		        	document.location.href ='../edit-produk';
		        </script>";
		    }
?>
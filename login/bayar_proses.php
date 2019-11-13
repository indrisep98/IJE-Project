<?php
session_start();
include"koneksi.php";


$id_pemesanan = addslashes($_POST['id_pemesanan']);
$username = addslashes($_POST['username']);
$jumlah = addslashes($_POST['jumlah']);
$bukti = addslashes($_FILES['bukti']['name']);

move_uploaded_file($_FILES['bukti']['tmp_name'], "bukti/".$_FILES['bukti']['name']);

        $query=mysqli_query($koneksi,"INSERT INTO pembayaran VALUES ('', '$id_pemesanan', '$username', '$jumlah', '$bukti')");
       if ($query) 
        {
            $_SESSION['id_pembayaran'] = $query['id_pembayaran'];
            echo "
            <script>
                alert('Pembayaran Berhasil di Kirim');
                document.location.href ='pembayaran.php';
            </script>
            ";
        }
            else 
            {
                echo "
                <script>
                    alert('Pembayaran Gagal di Kirim !');
                    document.location.href ='pembelian.php';
                </script>";
            }



?>
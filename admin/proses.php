<?php
include "conn/koneksi.php";
$tanggal = date("Y-m-d");
$transaksi = $_POST['TrNama'];

$jumlah  = $_POST['KlsNama'];

if (isset($_POST['submit'])) {
    if(isset($_POST['radio']))
    {
        if($_POST['radio'] == 1)  {
                 mysqli_query ($koneksi, "INSERT INTO transaksi VALUES('','$tanggal','$transaksi','$jumlah ', 0)");
        }
         else  if($_POST['radio'] == 2) {
                mysqli_query ($koneksi, "INSERT INTO transaksi VALUES('','$tanggal','$transaksi',0,'$jumlah ')");
       }
    }
}  
?>
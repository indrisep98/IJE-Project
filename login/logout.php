<?php
session_start();

unset($_SESSION['username']);
echo"
    <script>
    	alert('Berhasil Logout');
        window.location='../index.php';
    </script>";


?>
<?php
if(empty($_SESSION['SES_PELANGGAN'])) {
    echo"
    <script>
        window.location='checkout.php';
    </script>";

    $_SESSION['username']=$username;
} else {
    echo"
    <script>
        alert('Login Gagal');
        window.location='login.php';
    </script>";

    unset($_SESSION['username']);

	exit;
}
?>
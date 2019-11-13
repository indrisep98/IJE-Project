<?php
session_start();

if (!empty($_SESSION['username'])){
    echo"
    <script>
        window.location='login/index.php';
    </script>";
}
?>

<?php
	include 'header.php';
	?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Login</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Login</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
		
			<form method="post" action="login_proses.php">
			<div class="col-md-6 login-do">
				<div class="login-mail">
					<input type="text" name="username" placeholder="Username" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="password" placeholder="Password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				   
				<label class="hvr-skew-backward">
					<input type="submit" name="" value="Login">
				</label>
			</div>
			<div class="col-md-6 login-right">
				 <h3>Pastikan Anda Telah Mendaftar </h3>
				 
				 <p>Sebelum melakukan pemesanan, sebaiknya anda membuat akun terlebih dahulu. Dengan membuat akun, Anda bisa melakukan pemesanan dan mendapatkan diskon yang kami tawarkan kepada pelanggan. Apabila belum mendaftar klik tombol dibawah ini, anda akan diarahkan ke halaman pendaftaran</p>
				<a href="register.php" class=" hvr-skew-backward">Daftar</a>

			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>

</div>

<!--//login-->

			<!--brand-->
		<div class="container">
			<div class="brand">
			
			</div>
			</div>
			<!--//brand-->
		
	<!--//content-->
	<?php
	include 'footer.php';
	?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>
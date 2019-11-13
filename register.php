
<?php
	include 'header.php';
	?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Register</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Register</h2>
	</div>
</div>
<!--login-->
<div class="container">
		<div class="login">
			<form action="tambah_proses.php" method="post" enctype="multipart/form-data">
			<div class="col-md-6 login-do">
			<div class="login-mail">
					<input type="text" name="username" placeholder="Name" required="">
					<i  class="glyphicon glyphicon-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" name="no_hp" placeholder="Phone Number" required="">
					<i  class="glyphicon glyphicon-phone"></i>
				</div>
				<div class="login-mail">
					<input type="text" name="email" placeholder="Email" required="">
					<i  class="glyphicon glyphicon-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="password" placeholder="Password" required="">
					<i class="glyphicon glyphicon-lock"></i>
				</div>
				  
				<label class="hvr-skew-backward">
					<input type="submit" value="Submit">
				</label>
			
			</div>
			<div class="col-md-6 login-right">
				 <h3>Login Apabila Sudah Mendaftar</h3>
				 
				 <p>Silahkan melakukan pendaftaran untuk membuat akun baru. Apabila sudah mendaftar, Anda bisa melakukan login. Terima kasih telah melakukan pendaftaran. silahkan melakukan login melalui tombol di bawah ini.</p>
				<a href="login.php" class="hvr-skew-backward">Login</a>

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
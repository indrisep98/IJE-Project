<?php
	include 'header.php';
	?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Checkout</h2>
	</div>
</div>
<!--login-->
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
<div class="check-out">
<div class="container">
  		<h2 style="text-align: center; text-decoration: bold">Untuk Melakukan Pemesanan<br>
  		Anda Harus Login Terlebih Dahulu :)<br>
  		<a style="color:#f67777" href="login.php">Login di Sini</a>
  		</h2>
</div>
</div>
</div>
</div>

<!--//login-->
<!--brand-->
	<div class="brand" align="center">
				
				<div class="clearfix"></div>
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
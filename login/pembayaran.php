<?php
session_start();
require "koneksi.php";
if (empty($_SESSION['username'])){
    echo"
    <script>
        window.location='../login.php';
    </script>";
}
include 'header.php';
?>
<!--banner-->
	<div class="banner-top1">
	<div class="container">
		<h1>Pembayaran</h1>
		<em></em>
		<h2><a href="index.php">Beranda</a><label>/</label>Pembayaran</h2>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="col-md-9 contact-left">
						<h3>Terima Kasih Karena Anda Telah Melakukan Pembayaran di IJE Project <br>
						Apabila Sudah Melakukan Pembayaran, Silahkan Hubungi Kontak Berikut Ini</h3>
					
			
					<div class="address">
					<div class=" address-grid">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<h3>Whatsapp</h3>
								<p>+6288276205373</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Instagram<h3>
								<p>@ijeproject</p>
							</div>
							<div class="clearfix"> </div>
						</div>
</div>
				</div>
				<div class="col-md-3 contact-top">
					<img src="images/bunga11.png" class="img-responsive" alt="">
</form>						
				</div>
		<div class="clearfix"></div>
		</div>
		</div>
	</div>

<!--//contact-->
<!--brand-->
	
			<!--//brand-->
			</div>
			
		</div>
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
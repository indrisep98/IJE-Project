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
		<h1>Tentang Kami</h1>
		<em></em>
		<h2><a href="index.php">Beranda</a><label>/</label>Tentang Kami</h2>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="col-md-9 contact-left">
						<h3>Tentang Ije Project </h3>
						<p>Ije Project adalah sebuah toko online yang menjual barang-barang unik dan kreatif yang cocok diberikan sebagai kado di hari-hari perayaan.
						Ije Project mulai dirintis pada tahun 2016. Ije Project sudah berpengalaman dalam menjual produk-produk murah yang berkualitas, yang dijamin tidak akan mengecewakan pelanggan. Terima kasih sudah mampir di website official kami, Happy Shopping!!. </p>
					
			
					<div class="address">
					<div class=" address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<h3>Alamat</h3>
								<p>Jl. Simatang Borang, Palembang</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Nomor WA:<h3>
								<p>+6288276205373</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
							<h3>Email:</h3>
								<p><a href="mailto:info@example.com"> ijeproject@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-bell"></i>
							<div class="address1">
								<h3>Jam Buka:</h3>
								<p>Senin-Sabtu, 7AM-5PM</p>
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
		<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31876.463386521402!2d104.80143781890703!3d-2.942510762837488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b77139e9bdbed%3A0x88e2946663019c75!2sSematang+Borang%2C+Palembang+City%2C+South+Sumatra!5e0!3m2!1sen!2sid!4v1554876140118!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0"></iframe>
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
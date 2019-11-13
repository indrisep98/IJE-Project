<?php
session_start();
require "koneksi.php";
if (empty($_SESSION['username'])){
    echo"
    <script>
        window.location='../login.php';
    </script>";
}
$sql="SELECT * FROM pelanggan WHERE id_pelanggan = 'id_pelanggan';";
$proses=mysqli_query($koneksi, $sql);
while($data=mysqli_fetch_array($proses))
?>
<?php
include 'header.php';
?>
<!--banner-->
	<div class="banner-top1">
	<div class="container">
		<h1>Profile</h1>
		<em></em>
		<h2><a href="index.php">Beranda</a><label>/</label>Profile</h2>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="col-md-9 contact-left">
						<h3>Profile Akun </h3>
					
			
					<div class="address">
					<div class=" address-grid">
							<i class="glyphicon glyphicon-user"></i>
							<div class="address1">
								<h3>Nama Pelanggan (Username)</h3>
								<p><?php echo $data['username']; ?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
							<h3>Password:<h3>
								<p><?php echo $data['password'];?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
							<h3>Email:</h3>
								<p><?php echo $data['email'];?></p>
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
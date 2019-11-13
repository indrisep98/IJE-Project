<?php
include"koneksi.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../login.php");
}
$id_pemesanan = $_GET['id_pemesanan'];
 $query = mysqli_query($koneksi, "SELECT * FROM keranjang where id_pemesanan='$id_pemesanan'");
        foreach ($query as $data) 
// $id_pelanggan= $_SESSION['id_pelanggan'];
// $qry = mysql_query("SELECT * from keranjang where id_pelanggan='$id_pelanggan'");
?>
<?php
	include 'header.php';
	?>

<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Pembayaran</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label><a href="pembelian.php">Riwayat Pembelian</a><label>/</label>Pembayaran</h2>
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
	
	<h4>Setelah melakukan pemesanan, silahkan Anda melakukan pembayaran <br><br>
	ke no. rekening <b>5761-01-001324-50-3</b> <b>Bank BRI a.n. Indri Septiani</b><br><br>
	Total Biaya yang harus anda bayar sebesar <b>Rp. <?php echo $data['total_harga'];?>,-</b></h4>
	<div class="container">
		<div class="login">
			<form method="post" action="bayar_proses.php" enctype="multipart/form-data">
			<div class="col-md-6 login-do">
				<h3> Pembayaran </h3>
				<br>
					<input type="hidden" name="id_pemesanan" placeholder="" required="" value="<?php echo $data['id_pemesanan'];?>">
				<div class="login-mail">
					<input type="text" name="username" placeholder="Nama Pembeli" required="">
				</div>
				<div class="login-mail">
					<input type="text" name="jumlah" placeholder="Jumlah" value="<?php echo $data['total_harga'];?>" required="">
				</div>
				<div class="login-mail">
					<input type="file" id="bukti" name="bukti" placeholder="Bukti" required="required"> 
				</div>
				<div class="">
				<p style="margin-top:-35px; margin-bottom:30px; color:#F67777">*masukkan bukti transfer anda</p>
			</div>
				<label class="hvr-skew-backward">
					<input type="submit" name="" value="Kirim">
				</label>
			</div>
			</form>
	<div class="produced">
	 </div>
</div>
</div>

</div></div>

<!--//login-->
<!--brand-->
	<div class="brand" align="center">
				<div class="col-md-6 brand-grid gmbar">
					<img src="images/best2.png" class="img-responsive gmbar" alt="">
				</div>
				<div class="col-md-6 brand-grid">
					<img src="images/murah-png-3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//brand-->
	<!--//content-->
	<?php
	include 'footer.php';
	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<!-- <script src="js/simpleCart.min.js"> </script> -->
<!-- slide -->
<script src="js/bootstrap.min.js"></script>


 
</body>
</html>
<?php
include"koneksi.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../login.php");
}
 //$query = mysqli_query($koneksi, "SELECT * FROM pelanggan where id_pelanggan='$id_pelanggan'");
   //     foreach ($query as $data)


	
?>
<?php
	include 'header.php';
	?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Kirim Pesan</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Kirim Pesan</h2>
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
	<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class="contact-left">
						<div class="address"></div>
				<div class="col-md-5 contact-top">
					<img src="images/bunga11.png" class="img-responsive" alt="">
</div>
</div>
			<form method="post" action="tambah_proses_chat.php">
			<div class="col-md-7 login-do">
				<h2> Kirim Pesan Anda Ke Admin </h2>
				<br>	
				<div class="login-mail">
					<textarea type="text" name="pesan" placeholder="Pertanyaan" required=""></textarea>
				</div>
				<label class="hvr-skew-backward">
					<input type="submit" name="" value="Kirim">
				</label>
			</div>	
</form>
</div>
</div>
</div>
<?php
$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$sql="SELECT * FROM pesan_pelanggan WHERE id_pelanggan='$user_id';";
$proses=mysqli_query($koneksi, $sql);
?>
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
    	    	<h2>Chat Anda Ke Admin</h2>
		  <tr>
			<th>No.</th>
			<th>Pesan Anda</th>
		  </tr>
		<tr>
		<td>
<?php
$no=0;
while($data=mysqli_fetch_array($proses)){
?>
     		<tr class="">
			<td><?php echo ++$no;;?>
			<td><?php echo $data['pesan'];?></td>
		  </tr>
	<?php } ?>
	</table>
	<br>
	<br>
	<br>
	</div>
	</div>

<?php
$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$sql="SELECT * FROM pesan_admin WHERE id_pelanggan='$user_id';";
$proses=mysqli_query($koneksi, $sql);
?>
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
    	    	<h2>Balasan Chat dari Admin</h2>
		  <tr>
			<th>No.</th>
			<th>Nama Admin </th>
			<th>Pesan Balasan</th>
		  </tr>
		<tr>
		<td>
<?php
$no=0;
while($data=mysqli_fetch_array($proses)){
?>
     		<tr class="">
			<td><?php echo ++$no;;?>
			<td><?php echo $data['nama'];?></td> 
			<td><?php echo $data['pesan'];?></td>
		  </tr>
	<?php } ?>
	</table>
	<br>
	<br>
	<br>
	</div>
	</div>

	<?php
	include '../footer.php';
	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>
<?php
include"koneksi.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../login.php");
}
$query = mysqli_query($koneksi, "SELECT * FROM keranjang");
        foreach ($query as $data) 
 //$query = mysqli_query($koneksi, "SELECT * FROM pelanggan where id_pelanggan='$id_pelanggan'");
   //     foreach ($query as $data)


	
?>
<?php
	include 'header.php';
	?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Riwayat Pemesanan</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Riwayat Pemesanan</h2>
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

<?php
$username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$sql="SELECT * FROM pemesanan WHERE id_pelanggan='$user_id';";
$proses=mysqli_query($koneksi, $sql);
?>
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
    	    <table class="table-heading simpleCart_shelfItem">
    	    	<h2>Daftar Riwayat Pemesanan</h2>
		  <tr>
			<th>No.</th>
			<th>Tanggal</th>
			<th>Nama Penerima</th>
			<th>Total Harga</th>
			<th>Aksi</th>
		  </tr>
		<tr>
		<td>
<?php
mysql_connect("localhost", "jonproje_ijeproject","R-k5&eTm0byf");
                  mysql_select_db("jonproje_ijeproject");
                  $username = $_SESSION['username'];
$user = mysqli_query($koneksi, "SELECT * FROM `pelanggan` WHERE `username` = '$username';");
$user = mysqli_fetch_object($user);
$user_id = $user->id_pelanggan;
$query="SELECT pesan.tgl_pemesanan,pesan.nama_penerima,keran.total_harga, keran.id_pemesanan from (pemesanan pesan left JOIN keranjang keran on pesan.id = keran.id_pemesanan)  WHERE id_pelanggan='$user_id';";
                  $hasil=mysql_query($query);
                  $no_urut=0;
                  while($data = mysql_fetch_array($hasil)) {
                  $no_urut++;
                  echo "<tr>
                   <td>".$no_urut."</td>
                   <td>".$data['tgl_pemesanan']."</td>
                   <td>".$data['nama_penerima']."</td>
                   <td>".$data['total_harga']."</td>";
                   ?>
                    <td>
     
                        <ul class="bt-list">
                      <a href="bayar.php?id_pemesanan=<?php echo $data['id_pemesanan']; ?>" class="hvr-icon-grow-edit">Pembayaran</a></ul>
                      </td></td>
                  </tr>
                   <?php
                   }
?>
	</table>
	<br>
	<br>
	<br>
	</div>
	</div>

	

</td>
</tr>
</td>
</tr>
</table>
</div>
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
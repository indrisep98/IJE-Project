<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include 'header.php';
 ?>
<!--banner-->
<div class="banner">
	<div class="banner-cover">
<div class="container">
<section class="rw-wrapper">
				<h1 style="margin-top:-60px;" class="rw-sentence">
					<span style="font-size: 75px;">SELAMAT DATANG <br>DI WEBSITE IJE PROJECT</span>
					<div class="rw-words rw-words-1">
						<span>Hand Made</span>
						<span>Barang Berkualitas</span>
						<span>Desain Terbaik</span>
						<span>Harga Termurah</span>
						<span>Kado Terunik</span>
						<span>Untuk Orang Terkasih</span>
					</div>
					<div class="rw-words rw-words-2">
						<span>Jual Kado Unik &amp; Murah</span>
						<span>Trust Shopping</span>
						<span>No Tipu-tipu</span>
						<span>Barang Sesuai Gambar</span>
						<span>Barang Diproses Setelah diBayar</span>
					</div>
				</h1>
			</section>
			</div>
		</div>
</div>
	<!--content-->
		<div class="content">
			<div class="container">
				<div class="content-top">
					<div class="col-md-6 col-md">
						<div class="col-1">
						 <a href="bunga.php" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/19.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Kado Unik</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Hot Air Ballon</h3></div></a>

							<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
						</div>
						<div class="col-2">
							<span>Top Product</span>
							<h2><a href="bunga.php">Unik &amp; Berkualitas</a></h2>
							<p>IJE Project menjual produk berupa kado-kado unik yang berkualitas. Sebagian besar produk dibuat secara handmade, sehingga terjamin kualitasnya.</p>
							<a href="bunga.php" class="buy-now">Lihat Produk yg Lainnya..</a>
						</div>
					</div>
					<div class="col-md-6 col-md1">
						<div class="col-3">
							<a href="bunga.php"><img src="images/7.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Kado Ultah</p>
								<label></label>
								<h5>Box Bunga Flanel</h5>
							</div></a>
						</div>
						<div class="col-3">
							<a href="boneka.php"><img src="images/2.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Kado Wisuda</p>
								<label></label>
								<h5>Boneka Piala Wisuda</h5>
							</div></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--products-->
			<div class="content-mid">
				<h3>Produk Terlaris</h3>
				<label class="line"></label>
				<div class="mid-popular">
<?php
require "koneksi.php";
 $sql="SELECT * FROM produk WHERE status = 'Terlaris';";
$proses=mysqli_query($koneksi, $sql);
?>			
<?php
while($data=mysqli_fetch_array($proses)){
?>
					<div class="col-md-3 item-grid simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="admin/produk/uploads/<?php echo $data['gambar_produk'];?>" class="img-responsive" alt="">
						<div class="zoom-icon ">
						<a class="picture" href="admin/produk/uploads/<?php echo $data['gambar_produk'];?>"" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						<a href="deskripsi.php?id_produk=<?php echo $data['id_produk']; ?>"><i class="glyphicon glyphicon-menu-right icon"></i></a>
						</div>
						</div>
						<div class="mid-1">
						<div class="women">
						<div class="women-top">
							<span><?php echo $data['kategori_produk'];?></span>
							<h6><a href="deskripsi.php?id_produk=<?php echo $data['id_produk']; ?>"><?php echo $data['nama_produk'];?></a></h6>
							</div>
							<div class="img item_add">
								<a href="deskripsi.php?id_produk=<?php echo $data['id_produk'];?>"><img src="images/ca.png" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p ><em class="item_price">Rp. <?php echo $data['harga_produk'];?></em></p>
								
								
								<div class="clearfix"></div>
							</div>						
						</div>
					</div>
					</div>

					<?php
 }
?>	
					
					<div class="clearfix"></div>
				</div>
								
					<div class="clearfix"></div>
				</div>
			</div>
			<!--//products-->
			<div class="brand" align="center">
				<div class="col-md-6 brand-grid gmbar">
					<img src="images/best2.png" class="img-responsive gmbar" alt="">
				</div>
				<div class="col-md-6 brand-grid">
					<img src="images/murah-png-3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
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
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>


</body>
</html>
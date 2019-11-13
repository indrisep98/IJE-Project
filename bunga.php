<?php
include 'header.php';
?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Bunga</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Bunga</h2>
	</div>
</div>
	<!--content-->
	<div class="product">
			<div class="container">
			<div class="col-md-9">
				
			<div class="mid-popular">
		
<?php
require "koneksi.php";
 $sql="SELECT * FROM produk WHERE kategori_produk = 'Bunga';";
$proses=mysqli_query($koneksi, $sql);
?>			
<?php
while($data=mysqli_fetch_array($proses)){
?>
				
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="admin/produk/uploads/<?php echo $data['gambar_produk'];?>" class="img-responsive" alt="">
						<div class="zoom-icon ">

						<a class="picture" href="admin/produk/uploads/<?php echo $data['gambar_produk'];?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>

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
								  <div class="block">
									
								</div>
								
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
			</div>
			<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Kategori</h4>
							 <ul class="menu-drop cute">
							<li class="subitem1"><a href="bunga.php">Bunga </a>
							</li>
							<li class="item2"><a href="boneka.php">Boneka </a>
							</li>
							<li class="item3"><a href="ilustrasi.php">Ilustrasi</a>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						
 	
		</div>
			<div class="clearfix"></div>
			</div>
				<!--products-->
			
			<!--//products-->
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
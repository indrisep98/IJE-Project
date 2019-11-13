<?php
 include 'header.php';
 ?>
<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Detail Produk</h1>
		<em></em>
		<h2><a href="index.php">Home</a><label>/</label>Detail Produk</h2>
	</div>
</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			  <ul class="slides">
			  	<?php
require "koneksi.php";
$id_produk=$_GET['id_produk'];
 $sql="SELECT * FROM produk WHERE id_produk = '$id_produk';";
$proses=mysqli_query($koneksi, $sql);
$data=mysqli_fetch_array($proses);
?>			 <li data-thumb="admin/produk/uploads/<?php echo $data['gambar_produk'];?>">
			        <div class="thumb-image"> <img src="admin/produk/uploads/<?php echo $data['gambar_produk'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="admin/produk/uploads/<?php echo $data['gambar_produk2'];?>">
			         <div class="thumb-image"> <img src="admin/produk/uploads/<?php echo $data['gambar_produk2'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="admin/produk/uploads/<?php echo $data['gambar_produk3'];?>">
			       <div class="thumb-image"> <img src="admin/produk/uploads/<?php echo $data['gambar_produk3'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div  class="span_2_of_a1 simpleCart_shelfItem">
				<h3 name="nama_produk"><?php echo $data['nama_produk'];?></h3>
				<p class="in-para"> <?php echo $data['kategori_produk'];?></p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">Rp.<?php echo $data['harga_produk'];?></span>
				 <div class="clearfix"></div>
				</div>
				<h4 class="quick">Rincian Produk :</h4>
				<p class="quick_desc"> <?php echo $data['deskripsi1'];?></p>
			 
				
	<!--quantity-->
				 
			    <a href="checkout.php?id_produk=<?php echo $data['id_produk']; ?>" type="submit" class="add-to item_add hvr-skew-backward">Masukkan ke Keranjang</a>
			<div class="clearfix"> </div>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Deskripsi Produk</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Reviews</a></li>  
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p > <?php echo $data['deskripsi2'];?></p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Lihat Minimal Waktu Pemesanan di Rincian Produk</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Bisa Request Warna</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Tidak Menerima Pesanan Dari Luar Kota</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Pengiriman Menggunakan Gojek dan Grab</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>COD di sekitar merdeka dan perumnas sako</li>
										</ul>         
							        </div>

</div>

<div class="tab-pane text-style" id="tab3">

									 <div class="facts">
									  <p > Produk-produk yang dijual di IJE Project sangat bagus dan berkualitas. Selain itu, IJE Project menjual banyak kado-kado unik yang tentunya sangat keren untuk diberikan sebagai kado ultah, wisuda, dll.  </p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Respon Admin Sangat Baik</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Pengiriman Produk Cepat</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Kualitas Produk Baik</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Produk Sesuai Dengan Gambar</li>
										</ul>     
							     </div>	

 </div>
  
  </div>
  <div class="clearfix"></div>
  </div>
			<!---->	
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
		</div>
	</div>
		<div class="clearfix"> </div>
	</div>

	
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
		</div>	
		
	<!--//content-->
	<?php
			include 'footer.php';
		?>
<script src="js/imagezoom.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>


</body>
</html>
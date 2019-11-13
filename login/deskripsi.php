<?php
session_start();
require "koneksi.php";
if (empty($_SESSION['username'])){
    echo"
    <script>
        window.location='../login.php';
    </script>";
}
// $id_pelanggan = $_SESSION['id_pelanggan'];
$id_produk=$_GET['id_produk'];
 $sql="SELECT * FROM produk WHERE id_produk = '$id_produk';";
$proses=mysqli_query($koneksi, $sql);
$data=mysqli_fetch_array($proses);
?>	
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
			  			 <li data-thumb="../admin/produk/uploads/<?php echo $data['gambar_produk'];?>">
			        <div class="thumb-image"> <img src="../admin/produk/uploads/<?php echo $data['gambar_produk'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="../admin/produk/uploads/<?php echo $data['gambar_produk2'];?>">
			         <div class="thumb-image"> <img src="../admin/produk/uploads/<?php echo $data['gambar_produk2'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="../admin/produk/uploads/<?php echo $data['gambar_produk3'];?>">
			       <div class="thumb-image"> <img src="../admin/produk/uploads/<?php echo $data['gambar_produk3'];?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div  class="span_2_of_a1 simpleCart_shelfItem">
				<h3 name="nama_produk"><?php echo $data['nama_produk'];?></h3>
				<p class="in-para"> <?php echo $data['kategori_produk'];?></p>
			    <div class="price_single">
				  <span class="reducedfrom item_price">Rp. <?php echo $data['harga_produk'];?></span>
				 <div class="clearfix"></div>
				</div>
				<h4 class="quick">Rincian Produk :</h4>
				<p class="quick_desc"> <?php echo $data['deskripsi1'];?></p>

                <form method="post">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="product_id" value="<?= $data['id_produk'] ?>">
                    <input type="hidden" name="item_name" value="<?= $data['nama_produk'] ?>">
                    <input type="hidden" name="item_image" value="../admin/produk/uploads/<?= $data['gambar_produk'] ?>">
                    <input type="hidden" name="amount" value="<?= $data['harga_produk'] * 1000 ?>">
                    <input type="hidden" name="currency_code" value="IDR">
                    <input type="hidden" name="return" value="">
                    <input type="hidden" name="undefined_quantity" value="1">
                    <input type="submit" class="add-to item_add hvr-skew-backward" value="Masukkan ke Keranjang">
                </form>

        
			<div class="clearfix"> </div>
			</form>
			</div>
		
					</div>
			<div class="clearfix"> </div>
			<!---->
			<div class="tab-head">
			 <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Product Description</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Reviews</a></li>  
		</ul>
	</nav>
	<div class="tab-content one">
<div class="tab-pane active text-style" id="tab1">
 <div class="facts">
									  <p > <?php echo $data['deskripsi2'];?></p>
										<ul>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Minimal Pesan H-2 Untuk Produk Dengan Kategori Bunga, Boneka dan Ilustrasi. Dan H-5 Untuk Produk Hot Air Baloon dan Ilustrasi</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Bisa Request Warna</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Tulis Request di Kolom Deskripsi Pada Form Pemesanan</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Pengiriman Menggunakan Gojek dan Grab</li>
											<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Tidak Menerima Orderan Dari Luar Palembang. Untuk Area Palembang Bisa COD di sekitaran merdeka dan perumnas</li>
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

	<!-- <script src="js/simpleCart.min.js"> </script> -->
<!-- slide -->
<script src="js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
<script>
    paypal.minicart.render({
        action: 'checkout.php',
        template: '<%var items = cart.items();var settings = cart.settings();var hasItems = !!items.length;var priceFormat = { format: true, currency: cart.settings("currency_code") };var totalFormat = { format: true, showCode: true };%><form style="width: 600px; margin-left: -300px;" method="post" class="<% if (!hasItems) { %>minicart-empty<% } %>" action="<%= config.action %>" target="<%= config.target %>">    <button type="button" class="minicart-closer">&times;</button>    <ul>        <% for (var i= 0, idx = i + 1, len = items.length; i < len; i++, idx++) { %>        <li class="minicart-item">            <a class="minicart-name" href="<%= items[i].get("href") %>"><%= items[i].get("item_name") %></a>            <ul class="minicart-attributes">                <% if (items[i].get("item_image")) { %>                <li>                    <img style="margin-top: 10px; height: 100px" src="<%= items[i].get("item_image") %>" />                    <input type="hidden" name="item_image_<%= idx %>" value="<%= items[i].get("item_image") %>" />                </li>                <% } %>                <% if (items[i].discount()) { %>                <li>                    <%= config.strings.discount %> <%= items[i].discount(priceFormat) %>                    <input type="hidden" name="discount_amount_<%= idx %>" value="<%= items[i].discount() %>" />                </li>                <% } %>                <% for (var options = items[i].options(), j = 0, len2 = options.length; j < len2; j++) { %>                    <li>                        <%= options[j].key %>: <%= options[j].value %>                        <input type="hidden" name="on<%= j %>_<%= idx %>" value="<%= options[j].key %>" />                        <input type="hidden" name="os<%= j %>_<%= idx %>" value="<%= options[j].value %>" />                    </li>                <% } %>            </ul>            <input class="minicart-quantity" data-minicart-idx="<%= i %>" name="quantity_<%= idx %>" type="text" pattern="[0-9]*" value="<%= items[i].get("quantity") %>" autocomplete="off" />            <button style="background-color: #d9534f; border-color: #d43f3a;" type="button" class="minicart-remove" data-minicart-idx="<%= i %>">&times;</button>            <span class="minicart-price"><%= items[i].total(priceFormat) %></span>            <input type="hidden" name="item_name_<%= idx %>" value="<%= items[i].get("item_name") %>" />            <input type="hidden" name="amount_<%= idx %>" value="<%= items[i].amount() %>" />            <input type="hidden" name="shipping_<%= idx %>" value="<%= items[i].get("shipping") %>" />            <input type="hidden" name="shipping2_<%= idx %>" value="<%= items[i].get("shipping2") %>" />        </li>        <% } %>    </ul>    <div>        <% if (hasItems) { %>            <div class="minicart-subtotal">                <%= config.strings.subtotal %> <%= cart.total(totalFormat) %>            </div>            <button style="position: absolute; bottom: 10px; right: 10px;" class="add-to item_add hvr-skew-backward" type="submit" data-minicart-alt="<%= config.strings.buttonAlt %>"><%- config.strings.button %></button>        <% } else { %>            <p class="minicart-empty-text"><%= config.strings.empty %></p>        <% } %>    </div>    <input type="hidden" name="cmd" value="_cart" />    <input type="hidden" name="upload" value="1" />    <% for (var key in settings) { %>        <input type="hidden" name="<%= key %>" value="<%= settings[key] %>" />    <% } %></form>',
        strings: {
            button: 'Proses',
            subtotal: 'Subtotal:',
            discount: 'Diskon:',
            processing: 'Memproses...',
            empty: 'Keranjang kosong.'
        }
    });
</script>
</body>
</html>
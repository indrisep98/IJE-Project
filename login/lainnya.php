<div class="product">
			<div class="container">
				<div class="mid-popular">
<?php
require "koneksi.php";
 $sql="SELECT * FROM produk WHERE status = 'Terlaris';";
$proses=mysqli_query($koneksi, $sql);
?>	
					<div class="col-md-4 item-grid1 simpleCart_shelfItem">
					<div class=" mid-pop">
					<div class="pro-img">
						<img src="../admin/produk/uploads/<?php echo $data['gambar_produk'];?>" class="img-responsive" alt="">
						<div class="zoom-icon ">

						<a class="picture" href="../admin/produk/uploads/<?php echo $data['gambar_produk'];?>" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
						
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
								<a href="#"><img src="images/ca.png" alt=""></a>
							</div>
							<div class="clearfix"></div>
							</div>
							<div class="mid-2">
								<p><em class="item_price">Rp. <?php echo $data['harga_produk'];?></em></p>
								  <div class="block">
									<div class="starbox small ghosting"> </div>
								</div>
								
								<div class="clearfix"></div>
							</div>
							
						</div>
					</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			
					</div>
				<!--initiate accordion-->
<?php
include"koneksi.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../login.php");
}
// $id_pelanggan= $_SESSION['id_pelanggan'];
// $qry = mysql_query("SELECT * from keranjang where id_pelanggan='$id_pelanggan'");
?>
<?php
	include 'header.php';
	?>

<!--banner-->
<div class="banner-top1">
	<div class="container">
		<h1>Checkout</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Checkout</h2>
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
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive">
        <form id="form_checkout" method="post" action="checkout_proses.php">
    	    <table class="table-heading simpleCart_shelfItem">
		  <tr>
			<th class="text-center table-grid">Nama Produk</th>
			<th class="text-center">Jumlah</th>
			<th>Harga </th>
			<th>Total Harga</th>
		  </tr>

          <tbody id="checkout">
          </tbody>
	</table>
	<br>
	<br>
	<br>
	</div>
	</div>
	<div class="container">
		<div class="login">
			<div class="col-md-6 login-do">
				<h3> Pemesanan Produk </h3>
				<br>
				<div class="login-mail">
					<input type="date" name="tanggal" placeholder="Tanggal" required="">
				</div>
				<div class="login-mail">
					<input type="text" name="nama_penerima" placeholder="Nama Penerima" required="">
				</div>
				<div class="login-mail">
					<input type="text" name="alamat" placeholder="Alamat" required="">
					
				</div>
				<div class="login-mail">
					<input type="text" name="provinsi" placeholder="Provinsi" required="">
				</div>
				<div class="login-mail">
					<input type="text" name="kota" placeholder="Kota" required="">
				</div>
				<div class="login-mail">
					<input type="text" name="kode_pos" placeholder="Kode Pos" required="">
				</div>
				   <div class="login-mail">
					<input type="text" name="no_telp" placeholder="No.HP" required="">
				</div>
				 <div class="login-mail">
					<input type="text" name="deskripsi" placeholder="Deskripsi" required="">
				</div>
				<label class="hvr-skew-backward">
					<input type="submit" name="" value="Checkout">
				</label>
			</div>
	<div class="produced">
	 </div>
</div>
</div>
</form>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
<script>
    paypal.minicart.render();
</script>
<script type="text/javascript">
    $(document).ready(function() {
        paypal.minicart.render();

        var products = paypal.minicart.cart._items;
        var items = [];
        var sub_total = 0;

        $.each(products, function(index, item) {
            item = item._data;
            sub_total = sub_total + (item.quantity * item.amount);

            $('#checkout').append(`
                <tr>
                    <td>
                        <div class="sed">
                            <h5><a href="#">${item.item_name}</a></h5>
                        
                        </div>
                        <td class="text-center">${item.quantity}</td>
                        <td>Rp.${item.amount}</td>
                        <td class="item_price">Rp.${item.quantity * item.amount}</td>
                        <input type="hidden" name="cart[${index}][product]" value="${item.product_id}" />
                        <input type="hidden" name="cart[${index}][count]" value="${item.quantity}" />
                        <input type="hidden" name="cart[${index}][price]" value="${item.amount}" />
                </tr>
            `);
        });

        $('#checkout').append(`
            <tr>
                <td colspan="2"></td>
                <td style="text-align: center""><b>Subtotal</b></td>
                <td class="item_price">Rp.${sub_total}</td>
            </tr>
        `);

        $('.check_out').click(function(e) {
            e.preventDefault();

            window.location = "data-diri?items="+JSON.stringify(items);
        });

        $('.price').each(function(index, item) {
            price = $(item).html();
            $(item).html(rupiah(price));
        });

        $('#form_checkout').submit(function() {
            paypal.minicart.cart.destroy();
        });
    });
</script>
 
</body>
</html>

<?php
session_start();

if (!empty($_SESSION['username'])){
    echo"
    <script>
        window.location='login.php';
    </script>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Web Inventaris</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/pos.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
	<div class="banner1">
			<div class="login-banner">
				<div class="banner-cover">
					<h2 class="header-w3ls"> Aplikasi Inventaris Perangkat Teknologi</h2>
			
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form action="signup_proses.php" method="post">
					<input type="text" name="username" placeholder="Name" required="">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="text" name="level" placeholder="Level" required="">
					<div class="forgot-top-grids">
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Sudah punya akun? <a href="login.php"> Login disini</a></h4>
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
				<div class="copy1">
					<p>&copy;2018 Web Inventaris Bag Teknologi. All Rights Reserved | 
						<a href="http://www.posindonesia.go.id" target="_blank">PT Pos Indonesia</a>
					</p>
				</div>
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->

<!-- mother grid end here-->
</body>
</html>
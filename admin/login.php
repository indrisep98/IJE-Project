<?php
session_start();

if (!empty($_SESSION['username'])){
    echo"
    <script>
        window.location='index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Ije Project</title>
		<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Donuts Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
		<script>
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
		<!-- Meta tags -->
		<!-- font-awesome icons -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
		<!--stylesheets-->
		<link href="css/login.css" rel='stylesheet' type='text/css' media="all">
			<!--//style sheet end here-->
			<link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
				<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
				</head>
				<body>
					<h1 class="header-w3ls">
		IJE Project</h1>
					<div class="mid-cls">
						<div class="swm-right-w3ls">
							<form method="post" action="login_proses.php">
								<div class="icon-head">
									<h2>Form Login Admin</h2>
									
								<div class="main">
									
									<div class="form-left-w3l">
										<input type="text" name="username" placeholder="Username" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-w3ls ">
											<input type="password" name="password" placeholder="Password" required="">
												<div class="clear"></div>
											</div>
											<div class="btnn">
												<button type="submit" name="login" value="Login">Login</button>
												
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="copy">
									<p>&copy;2019 Admin Ije Project. All Rights Reserved | Design by Indri Septiani </a>
									</p>
								</div>
							</body>
						</html>
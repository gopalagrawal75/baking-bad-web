<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu-right-checkout</title>
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/cartstyle.css">


	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->

</head>

<body>
<div class="overlay" id="overlay" style="display:none;"></div>

<div class="box" id="box">
 <a class="boxclose" id="boxclose"></a>
 <h1>Your orders</h1>
 <p >
  Please select the filtering criteria for your orders
  <select id='order-filter'>
  	<option value='placed'>placed</option>
  	<option value='accepted'>accepted</option>
  	<option value='cancelled'>cancelled</option>
  	<option value='ready'>ready</option>
  	<option value='delayed'>delayed</option>
  	<option value='delivered'>delivered</option>
  </select>
  </p>
  <p>
  <input type="button" id="order-retrieve" value="Go!">
  </p>
  <div id="orders">
  </div>
 </p>
</div>
	<div id="main-wrapper">
	<input type="hidden" id="refreshed" value="no">
		
		<header id="header">
			<div class="header-top-bar">
				<div class="container">
					<div id="default-row"class="row">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<div class="header-login">
								<a href="#" onclick="registerBox()">Register</a>
								<a href="#" onclick="loginBox()">Login</a>
								<div class="login-box">
									<form id="bg-login-form" method="post"  role="form">
										<p class="status"></p>
										<input type="text" id="login-email" name="login_username" value="" class="form-control" placeholder="Email">
										<input type="password" id="login-password" name="login_password" value="" class="form-control" placeholder="Password">
										<p class="submit form-row">
											<input type="button" name="wp-submit" id="bg-login" class="btn btn-default-red-inverse" value="Login" onclick="login()">
										</p>


									</form>
								</div>
								<div class="register-box">

									<form id="bg-register-form">
										<p class="status">Register</p>
										<input type="text" required id="register-email" name="login_username" value="" class="form-control" placeholder="Email">
										<input type="password" id="register-password" name="login_password" value="" class="form-control" placeholder="Password">
										<p class="submit form-row">
											<input type="button" name="wp-submit" id="bg-register" class="btn btn-default-red-inverse" value="Register" onclick="register()">
										</p>
									</form>
								</div>


							</div>
							<!-- end .header-login -->
							<!-- Header Social -->
							<ul class="header-social">
								<li><a href="#"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-twitter-square"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-linkedin-square"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-pinterest-square"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-7 col-sm-12 col-xs-12">
							<p class="call-us">
								Call Us: <a class="font" href="#">+1123 4567</a>
								<span class="open-now"><i class="fa fa-check-square"></i>We are open now(9am-10pm)</span>
								<span class="close-now"><i class="fa fa-square"></i>We are close now(10pm-9am)</span>
							</p>
						</div>
					</div><!--end row-->
					<!--logged-in row-->
					<div class="row" id="login-row" style="display:none;">
						<div class="col-lg-8" style="font-size:14px;">
							<?php if(isset($_SESSION['uname']))
							echo "Welcome, ". $_SESSION['uname']
							?>
						</div>
						<div class="col-lg-4">
							<ul class="options-dropdown">
								<li>Options
									<ul class="options-dropdown-ul">
										<li><a id ='activator'>order history</a></li>
										<li><a id='logout'>logout</a></li>
									</ul>
								</li>
							</ul>

						</div>
					</div><!--end of logged-in row-->
					<!-- end .container -->
				</div>
			</div>
			<!-- end .header-top-bar -->

			<div class="header-nav-bar">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<img src="img/logo.png" alt="">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								</li>

								<li><a href="contact-us.html">Contact us</a>
								</li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
			<!-- end .header-nav-bar -->

			<div class="small-menu">
				<div class="container">
					<div class="choose-option">
						<ul class="list-unstyled list-inline">
							<li class="active"><a href="#">1. Choose</a>
							</li>
							<li><a href="#">2. Confirm</a>
							</li>
							<li><a href="#">3. Checkout</a>
							</li>
						</ul>
					</div>
					<!-- end .choose-option-->
					<ul class="list-unstyled list-inline">
						<li><a href="index.php">Home</a>
						</li>
						<li><i class="fa fa-chevron-right"></i>
						</li>
						<li><a href="menu-1.html">Menu Card</a>
						</li>
					</ul>
				</div>
				<!-- end .container-->
			</div>
			<!--end .small-menu -->
		</header>
		<!-- end #header -->
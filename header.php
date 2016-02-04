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
							<b><?php if(isset($_SESSION['uname']))
							echo "Welcome, ". $_SESSION['uname']
							?></b>
						</div>
						<div class="col-lg-4">
							<ul class="options-dropdown">
								<li><b>Options</b>
									<ul class="options-dropdown-ul">
										<li><a id ='activator'><b>Order history</b></a></li>
										<li><a id='logout'><b>Logout</b></a></li>
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
									<a href="index.php" >Home</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle act" data-toggle="dropdown">Menu Card <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<?php for ($i=0;$i<count($array['data']['menu']);$i++)
										{?>
											<li><a href='show.php?cat=<?php  echo $i;?>'><?php echo $array['data']['menu'][$i]['category'];?></a></li>
										<?php }?>
									</ul>
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
							<li id="choose"><a href="#">1. Choose</a>
							</li>
							<li id="choose"><a href="#">2. Confirm</a>
							</li>
							<li id="checkout"><a href="#">3. Checkout</a>
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
<?php 
session_start();
$url = "http://lannister-api.elasticbeanstalk.com/tyrion/menu?vendor_id=1";
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
$array = json_decode($result, true);
$_SESSION['menu']=$array;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home-TakeAway</title>
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="js/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="js/masterslider/skins/black-2/style.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="main-wrapper">
		<header id="header">
			<div class="header-top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<div class="header-login">
								<a href="#">Order online</a>
								<a href="#">Login</a>	
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
					</div> <!-- end .row --> 
				</div> <!-- end .container -->
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
								<img src="img/header-logo.png" alt="TakeAway">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle act" data-toggle="dropdown">Home <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="index.html">Home-1</a></li>
										<li><a href="index-landingpage.html">Home landing</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Card <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="menu(view-1).html">Menu( view-1 )</a></li>
										<li><a href="menu(view-2).html">Menu( view-2 )</a></li>
										<li><a href="menu-without-side-panel.html">Menu( grid-view )</a></li>
										<li><a href="single-menu.html">Single Menu</a></li>
										<li><a href="menu(2grid-list).html">Menu( 2grid-list-view )</a></li>
										<li><a href="menu-with-right-checkout.html">Menu( with-checkout )</a></li>
										<li><a href="dish.html">Dish</a></li>
										<li><a href="dish-with-no-sidebar.html">Dish ( No Sidebar )</a></li>
										<li><a href="shortcodes.html">Shortcodes</a></li>
									</ul>
								</li>
								<li><a href="chef.html">Chef</a>
								</li>
								<li><a href="our-team.html">Team</a>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-post.html">Blog Post</a></li> 
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">News & Events <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="news-events.html">News & Events list</a></li>
										<li><a href="event-page.html">News & Events post</a></li> 
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
			<!-- small menu section -->
			<div class="small-menu">
				<div class="container">
					<ul class="list-unstyled list-inline">
						<li><a href="#">Home</a>
						</li>
						<li><i class="fa fa-chevron-right"></i>
						</li>
						<li><a href="our-team.html">Team</a>
						</li>
					</ul>
				</div>
				<!-- end .container-->
			</div>
			<!--end .small-menu -->
		</header>
		<!-- end #header -->

		<!-- all page-content star -->
		<div id="page-content">
			<!-- masterslider -->
			<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
				<!-- new slide -->
				<div class="ms-slide">
					<!-- slide background -->
					<img src="js/masterslider/blank.gif" data-src="img/content/home-slide-1.jpg" alt="">
					<!-- slide text layer -->
					<div class="ms-layer ms-caption" style="">
						<h1 class="text-right">
							<span>Hungry?!</span>
							<br>Good, we are here
							<br>to
							<span class="bold">serve</span>you
						</h1>
						<a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Read  More</a>
					</div>

				</div>
				<!-- end of slide -->
				<!-- new slide -->
				<div class="ms-slide">
					<!-- slide background -->
					<img src="js/masterslider/blank.gif" data-src="img/content/home-slide-1.jpg" alt="">
					<!-- slide text layer -->
					<div class="ms-layer ms-caption" style="">
						<h1 class="text-right">
							<span>Hungry?!</span>
							<br>Good, we are here
							<br>to
							<span class="bold">serve</span>you
						</h1>
						<a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Read  More</a>
					</div>
				</div>

				<!-- new slide -->
				<div class="ms-slide">
					<!-- slide background -->
					<img src="js/masterslider/blank.gif" data-src="img/content/home-slide-1.jpg" alt="">
					<!-- slide text layer -->
					<div class="ms-layer ms-caption" style="">
						<h1>
							<span>Hungry?!</span>
							<br>Good, we are here
							<br>to
							<span class="bold">serve</span>you</h1>
						<a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Read  More</a>
					</div>
				</div>
				<!-- end of slide -->
			</div>
			<!-- end of masterslider -->

			<!-- purchase TakeAway section start -->
			<div class="container">
				<div class="call-to-action-section">
					<div class="css-table-cell">
						<div class="icon">
							<img src="img/content/call-to-action-icon1.png" alt="">
						</div>
					</div>
					<div class="text css-table">
						<div class="css-table-cell">
							<h4>Purchase TakeAway</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi..</p>
						</div>

						<div class="css-table-cell">
							<a href="#" class="btn btn-default-red  pad-bottom"><i class="fa fa-file-text-o"></i> Read  More</a>
						</div>

						<div class="css-table-cell">
							<a href="#" class="btn btn-default-red-inverse pad-top"><i class="fa fa-shopping-cart"></i> Purchase Now!</a>
						</div>
					</div>
				</div>
				<!-- end .call-to-action-section -->
			</div>
			<!-- end .container -->
			<!-- end purchase TakeAway section  -->

			<!-- start .category box section -->
			<div class="category-boxes-icons">
				<div class=" container">
					<div class="row">
						<?php
							for ($i =0 ; $i < count($array['data']['menu']);$i++){
						?>
							<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="category-boxes-item">
								<figure>
									<img src="img/content/starter.jpg">
									<?php
										echo "<h4>".strtoupper($array['data']['menu'][$i]['category'])."</h4>";
									?>	
										<figcaption> <a href="show.php?cat=<?php echo $array['data']['menu'][$i]['id']; ?>" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a> 
										</figcaption>
									</figure>
								</div>
							</div>
							<?php } ?>
					

						
					</div>
					<!-- end .row -->
				</div>
				<!-- end .category-boxes-icons -->
			</div>
			<!-- container -->

			<!-- star.chef-welcome -->
			<div class="chef-welcome">
				<div class="container">
					<h1>Welcome</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
					<a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
				</div>
				<!-- end .container -->
			</div>
			<!--end .chef-welcome-->

			<!--start small-slide section -->
			<div id="sm-slide-section">
				<div class="container">
					<div class="slide-heading text-center">
						<h4>Our Clients Say</h4>
					</div>
					<!--end .clients heading-->
					<div id="slide-content" class="owl-carousel">
						<div class="item">
							<img src="img/content/sm-slide-img1.jpg" alt="img-1">
							<div class="details">
								<h5><a href="#">jane doe</a>
								</h5>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
								</ul>
								<p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.jpg" alt="img-2">
							<div class="details">
								<h5><a href="#">chrich woods</a>
								</h5>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
								</ul>
								<p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img1.jpg" alt="img-1">
							<div class="details">
								<h5><a href="#">jane doe</a>
								</h5>
								<ul class="list-unstyled list-inline">
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
								</ul>
								<p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.jpg" alt="img-2">
							<div class="details">
								<h5><a href="#">chrich woods</a>
								</h5>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
								</ul>
								<p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img1.jpg" alt="img-1">
							<div class="details">
								<h5><a href="#">jane doe</a>
								</h5>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
								</ul>
								<p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->

						<div class="item">
							<img src="img/content/sm-slide-img-2.jpg" alt="img-2">
							<div class="details">
								<h5><a href="#">chrich woods</a>
								</h5>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-star"></i></a>
									</li>
								</ul>
								<p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
							</div>
						</div>
						<!-- end item class div-->
					</div>
					<!-- end i.slide-content -->
				</div>
				<!-- end .container-->
			</div>
			<!-- end .sm-slide-section-->

			<!--Start blog feed section-->
			<div class="latest-from-blog text-center">
				<div class="container">
					<h4>Latest From the Blog</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="blog-latest">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<img class="" src="img/content/blog-post-1.jpg" alt="blog-image">
									</div>
									<div class="col-md-6 col-sm-12">
										<h5><a href="#">Post Title Goes Here</a>
										</h5>
										<p><i class="fa fa-clock-o"></i>
											<span class="date">27.6.2014</span>at
											<span class="time">17.33</span>
										</p>
										<p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
									</div>
									<!--end .blog-details-->
								</div>
								<!--end .row-->
							</div>
							<!--end .blog-latest -->
						</div>
						<!--end grid layout-->

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="blog-latest">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<img class="" src="img/content/blog-post-2.jpg" alt="blog-image">
									</div>
									<div class="col-md-6 col-sm-12">
										<h5><a href="#">Post Title Goes Here</a>
										</h5>
										<p><i class="fa fa-clock-o"></i>
											<span class="date">27.6.2014</span>at
											<span class="time">17.33</span>
										</p>
										<p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
									</div>
									<!--end .blog-details-->
								</div>
								<!--end .row-->
							</div>
							<!--end .blog-latest -->
						</div>
						<!--end grid layout-->

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="blog-latest">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<img class="" src="img/content/blog-post-3.jpg" alt="blog-image">
									</div>
									<div class="col-md-6 col-sm-12">
										<h5><a href="#">Post Title Goes Here</a>
										</h5>
										<p><i class="fa fa-clock-o"></i>
											<span class="date">27.6.2014</span>at
											<span class="time">17.33</span>
										</p>
										<p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
									</div>
									<!--end .blog-details-->
								</div>
								<!--end .row-->
							</div>
							<!--end .blog-latest -->
						</div>
						<!--end grid layout-->

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="blog-latest">
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<img class="" src="img/content/blog-post-4.jpg" alt="blog-image">
									</div>
									<div class="col-md-6 col-sm-12">
										<h5><a href="#">Post Title Goes Here</a>
										</h5>
										<p><i class="fa fa-clock-o"></i>
											<span class="date">27.6.2014</span>at
											<span class="time">17.33</span>
										</p>
										<p class="bl-sort">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
									</div>
									<!--end .blog-details-->
								</div>
								<!--end .row-->
							</div>
							<!--end .blog-latest -->
						</div>
						<!--end grid layout-->
					</div>
					<!--end .row main-->
					<!-- read older button -->
					<div class="read-older">
						<a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read Older Entries</a>
					</div>
				</div>
				<!--end container-->
			</div>
			<!--end .latest-from-blog-->

		</div>
		<!-- end #page-content -->
		<!--footer start-->
		<footer id="footer">
			<div class="container">
				<div class="main-footer">
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<img src="img/header-logo.png" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.
							</p>
						</div>

						<div class="col-sm-6 col-md-3">
							<h5>Quick Links</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="footer-links padd">
										<li><a href="#">Home</a>
										</li>
										<li><a href="#">Menu Card</a>
										</li>
										<li><a href="#">reservation</a>
										</li>
									</ul>
								</div>

								<div class="col-md-6">
									<ul class="footer-links">
										<li><a href="#">about us</a>
										</li>
										<li><a href="#">news & events</a>
										</li>
										<li><a href="#">contact us</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-3">
							<h5>Latest Tweets
								<span><i class="fa fa-chevron-left"></i>  <i class="fa fa-chevron-right"></i>
								</span>
							</h5>

							<p><a href="#">takeaway:</a> Take a (Photo) Tour of #Envato's #Melbourne Headquarters (...)
								<br>
								<span>7 hours ago</span>
							</p>
						</div>

						<div class="col-sm-6 col-md-3">
							<h5>Newsletter</h5>
							<p>Sign up for our newsletter!</p>
							<div class="footer-subscribe">
								<form>
									<input type="Email" placeholder="Email address...">
									<button type="submit" value=""><i class="fa fa-plus-circle-o"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					<p>Copyright 2014 © TakeAway. All rights reserved. Powered by <a href="#">UOUapps</a>.</p>
					<ul class="footer-social">
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
					<!-- end .footer-social -->
				</div>
			</div>
		</footer>
		<!-- end #footer -->
		
	</div>
	<!-- end #main-wrapper -->
	<!-- Scripts -->
	<!-- CDN jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Local jQuery -->
	<script>
	window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
	</script>
	<script src="js/masterslider/masterslider.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="js/jquery.ui.map.js"></script>
	<script src="js/scripts.js"></script>

	<script>

		var slider = new MasterSlider();
		slider.setup('masterslider', {
			width: 1140,
			height: 500,
			space: 5,
			fullwidth: true,
			speed: 25,
			view: 'flow',
			centerControls: false
		});
		slider.control('bullets', {
			autohide: false
		});

	
	</script>

</body>

</html>

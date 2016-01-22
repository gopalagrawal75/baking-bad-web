<?php 
error_reporting(E_ALL);
session_start();
$url="http://lannister-api.elasticbeanstalk.com/tyrion/areas?vendor_id=1";
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
$areas = json_decode($result, true);
$array=$_SESSION['menu'];
$order=$_SESSION['final_order'];
?>
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
	<link rel="stylesheet" href="css/woocommerce.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/cartstyle.css">
	<link rel="stylesheet" type="text/css" href="css/woocommerce_lay.css">


	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
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
					</div>
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
								<img src="img/header-logo.png" alt="">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="index.html">Home-1</a></li>
										<li><a href="index-landingpage.html">Home landing</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle act" data-toggle="dropdown">Menu Card <span class="caret"></span></a>
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

			<div class="small-menu">
				<div class="container">
					<div class="choose-option">
						<ul class="list-unstyled list-inline">
							<li ><a href="#">1. Choose</a>
							</li>
							<li ><a href="#">2. Confirm</a>
							</li>
							<li class="active"><a href="#">3. Checkout</a>
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
		<div class="page-content">
			<div class="news-events-blog page-format">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="post-10 page type-page status-publish hentry blog-post">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<h4> Checkout</h4>
										<div class="woocommerce">
											<div class="woocommerce-info">
											</div>
											<form action="test.php" name="checkout" method="post">
												<div class="col2-set" id="customer-details">
													<div class="col-1">
														<div class="woocommerce-billing-fields">
															<h3> Billing Details </h3>
															<p class="form-row form-row-first" id="billing-first-name">
																<label for="billing-first-name" class>
																	First Name
																	<abbr class="required" title="required">*</abbr>
																</label>
																<input type="text" class="input-text"  name="billing-first-name">
															</p>
															<p class="form-row form-row-last" id="billing-last-name">
																<label for="billing-last-name" class>
																	Last Name
																	<abbr class="required" title="required">*</abbr>
																</label>
																<input type="text" class="input-text"  name="billing-last-name">
															</p>
															<div class="clear"></div>
															<p class="form-row form-row-wide address-field" id="billing-address-1">
																<label for="billing-address-1" class>
																	Address
																	<abbr class="required" title="required">*</abbr>
																</label>
																<input type="text" name="billing-address-1" class="input-text" placeholder="Street Address">
															</p>
															<p class="form-row form-row-wide address-field"  id="billing-address-2">
																<input type="text" name="billing-addresss-2"class="input-text" placeholder="Apartment, suite, unit etc. (optional)">
															</p>
															<p class="form-row form-row-wide address-field" id="billing-area">
																<label for="billing-area" class>
																	Area
																	<abbr class="required" title="required">*</abbr>
																</label>
																	<select name="areas">
																		<?php 
																			for($i=0;$i<count($areas['data']);$i++){
																			?>
																			<option value="<?php echo $areas['data'][$i];?>">
																			<?php echo $areas['data'][$i];?></option>
																		<?php }?>
																	</select>
															</p>
															<p class="form-row form-row-first address-field" id="billing-postcode">
																<label for="billing-postcode"> Postcode
																<abbr class="required" title="required">*</abbr>
																</label>
																<input name="postcode" type="text" class="input-text">
															</p>
															<p class="form-row form-row-last " id="billing-phone">
																<label for="billing_phone"> Phone
																<abbr class="required" title="required">*</abbr>
																</label>
																<input name="phone" type="text" class="input-text">
															</p>
															<p class="form-row form-row-first" id="billing-email">
																<label for="billing-email"> E-mail
																<abbr class="required" title="required">*</abbr>
																</label>
																<input name="email" type="text" class="input-text">
															</p>
															<p class="form-row form-row-wide" id="submit">
																<label for="submit">
																<input  type="submit" class="checkout-button button alt wc-forward" value="Submit">
																</label>
															</p>
														</div>
													
													</div> <!--End of Column-1-->
													<!--<div class="col-2">
														<h3 id="order_review_heading">Your order</h3>
														<div id="order-review" style="position: relative; zoom: 1;">
															<table class="shop-table" width="100%">
																<thead>
																	<tr>
																		<th class="product-name">Product</th>
																		<th class="product-total">Total</th>
																	</tr>
																</thead>
																<tbody id="order-review-body">
																</tbody>
															</table>
														</div>
													</div>-->
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div><!--end of main wrapper-->
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script>
	/*function populateSummary()
	{
		var order=<?php echo json_encode($order);?>;
		if(order==null)
			console.log("no order");
		else
		{
			console.log(order);
			var names=findNames(order);
		}//end of else conditon which checks if order is null
	}

	function findNames(order)
	{

	}
	populateSummary();*/
	
</script>
</html>




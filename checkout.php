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
$address=$_SESSION['address'];
//retrieving delivery charges API
$url="http://lannister-api.elasticbeanstalk.com/tyrion/s_charges?vendor_id=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);
$charges=json_decode($result,true);




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

<script> console.log(<?php echo $address;?>);</script>
	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="main-wrapper">
		<header id="header">
			<div class="header-top-bar">
				<div class="container">
					<div id="default-row" class="row">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<div class="header-login">
								<a href="#">Register</a>
								<a href="#" onclick="loginBox()">Login</a>
								<div class="login-box">
        							<form id="bg-login-form"  method="post"  role="form">
                 						 <p class="status"></p>
                 						 <input type="text" id="login-email" name="login_username" value="" class="form-control" placeholder="Email">
                 						 <input type="password" id="login-password" name="login_password" value="" class="form-control" placeholder="Password">
                						  <p class="submit form-row">
                  							  <input type="button" name="wp-submit" id="bg-login" class="btn btn-default-red-inverse" value="Login" onclick="login()">
                    						   
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
					</div>
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
										<li>order history</li>
										<li>logout</li>
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
												<div class="row">
													<div class="col-lg-8">
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
															<p>
																<label>
																	Address
																	<abbr class="required" title="required">*</abbr>
																	<span onclick="showAddForm()" id="editaddress">Edit</span>
																</label>
															</p>
															<script type="text/javascript">
															function showAddForm(){
																$('.address-div').slideToggle();

															};
															</script>

															<div class="address-div" style="display:none;">
																<p class="form-row form-row-wide address-field" id="billing-address-1">
																
																	<input type="text" id="billing-address-1" name="billing-address-1" class="input-text" placeholder="Street Address">
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
																		<p id="del-charge"> </p>
																</p>
																<p class="form-row form-row-wide address-field"  id="billing-postcode">
																<label for="billing-postcode"> Postcode
																	<abbr class="required" title="required">*</abbr>
																	</label>
																	<input name="postcode" type="text" class="input-text">
																</p>
															</div>
															<div id="db-addresses" class="row">

																<?php
																//print_r($address);

																	for ($i=0;$i<count($address['data']);$i++)
																	{
																		?>
																		<div class="col-lg-4">
																			<div class="address-col-4">
																				<?php echo "Address: ".$address['data'][$i][0]['address'];?><br>
																				<?php echo "Area: ".$address['data'][$i][0]['area'];?><br>
																				<?php echo "Pin: ".$address['data'][$i][0]['pincode'];?><br><br>
																				<input type ="checkbox" onchange="populate_address(<?php echo $i;?>)" > Use
																			</div>
																			
																		</div>
																		
																		
																	<?php }
																?>
																
																
															</div>
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
																<input id="email" name="email" type="text" class="input-text">
															</p>
															<p class="form-row form-row-wide" id="submit">
																<label for="submit">
																<input  id="checkout-submit"type="submit" class="checkout-button button alt wc-forward" value="Submit">
																</label>
																<div style="display:none;" id="login-prompt"><b>Please login/register before placing your your order!!</b></div>
															</p>
														</div>	
													</div>
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
<script src="js/scripts.js"></script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/jquery.ui.map.js"></script>
<script>

	email="<?php if (isset($_SESSION['uname'])) 
					{echo $_SESSION['uname'];} 
				else 
					{echo "NA";}?>";
	charges=<?php echo json_encode($charges);?>;
	
	var address=<?php echo json_encode($address);?>;
	$(document).ready(function(){
		if(email=="NA")
		{
			$('#checkout-submit').prop('disabled',true);
			$('#login-prompt').toggle();
		}
		else
		{ 
			$('#checkout-submit').prop('disabled',false);
			$('#login-prompt').prop('disabled',true);
			$('#login-row').toggle();
			$('#default-row').toggle();
			$('#email').val(email);
		}
			showAddress();
		});
	
	$(function(){
		$('select[name=areas').on('change', function() {
  		for (i=0;i<charges['data'].length;i++){
  			console.log(charges['data'][i].area);
  		}
  	}); 
});
	
	function showAddress()
	{
		
		console.log(address);
		if(address==null || address['success']!='true'){

			$('#editaddress').hide();
			$('.address-div').slideToggle();
		}
	}

	function populate_address(i)
	{
		$('.address-div').slideToggle();
		$('input[name=billing-address-1]').val(address['data'][i][0].address);
		$('input[name=postcode').val(address['data'][i][0].pincode);
		$('select[name=areas').val(address['data'][i][0].area);
		$('#db-addresses').slideToggle();
		
	}

	function login() {

				var login={};
				login.email=document.getElementById('login-email').value;
				login.password=document.getElementById('login-password').value;
				login.vendor_id=1;
				console.log(login);
				$.when($.ajax({
			            url: 'http://lannister-api.elasticbeanstalk.com/tyrion/user/login',
			            type: 'post',
			            dataType: 'json',
			            success: function (data) {
			                
			                response=data;
			                console.log(response);
			                if(response.data){
			                	$.post("login.php",{email:login.email, password:login.password},function(data) {});
			                	//making ajax call to retrieve addresses
			                	$.ajax({
			                		url:'http://lannister-api.elasticbeanstalk.com/tyrion/address?email='+login.email+'&vendor_id=1',
			                		type:'get',
			                		dataType: 'json',
			                		success: function(data){
			                			//ajax to save address in session
			                			$.post("address.php",{address:data},function(data){alert(data);});
			                			console.log(data);
			                		}

			                		
			                	});
			                }
			                else
			                	alert("Login Credentials invalid, please sign-up");
			            },
			            data: JSON.stringify(login)
			        })).then(function(){location.reload(true);});
				
			}
	
	$('.options-dropdown').on('click',function(){
	$('.options-dropdown-ul').slideToggle();
	});
	
</script>
</html>




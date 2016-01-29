<?php
error_reporting(E_ALL);
session_start();
$array=$_SESSION['menu'];

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
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/cartstyle.css">


	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="main-wrapper">
	<input type="hidden" id="refreshed" value="no">
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
</script>
		<header id="header" style="z-index:0">
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

			<div class="small-menu" style="z-index:-2">
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
		<div id="page-content">
			<!-- <div id="thumbnail-slide" style="z-index:-1;">
				<div class="container">
					<div id="thumb-slide">
						<div id="thumb-slide-section" class="owl-carousel">
							<div class="item">
								<a href="#">
									<img src="img/content/meat-fish.png" alt="meet-fish">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/milk.png" alt="milk">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/neggies.png" alt="viegene">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fruits.png" alt="fruits">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fastfood.png" alt="fast-foood">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/meat-fish.png" alt="meet-fish">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/milk.png" alt="milk">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/neggies.png" alt="viegene">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fruits.png" alt="fruits">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fastfood.png" alt="fast-foood">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/meat-fish.png" alt="meet-fish">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/milk.png" alt="milk">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/neggies.png" alt="viegene">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fruits.png" alt="fruits">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fastfood.png" alt="fast-foood">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/meat-fish.png" alt="meet-fish">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/milk.png" alt="milk">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/neggies.png" alt="viegene">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fruits.png" alt="fruits">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fastfood.png" alt="fast-foood">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/meat-fish.png" alt="meet-fish">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/milk.png" alt="milk">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/neggies.png" alt="viegene">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fruits.png" alt="fruits">
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/content/fastfood.png" alt="fast-foood">
								</a>
							</div>
						</div>

					</div>

				</div>

			</div> -->


			<!-- start #main-wrapper -->
			<div class="container">
				<div class="row mt30">
					<div class="col-md-9">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#tab-1" role="tab" data-toggle="tab">All</a>
							</li>
						</ul>

						<div class="view-style dsn">
							<div class="list-grid-view">
								<button class="thumb-view"><i class="fa fa-list"></i></button>
								<button class="without-thumb"><i class="fa fa-align-justify"></i></button>
								<button class="grid-view"><i class="fa fa-th-list"></i></button>
							</div>
							<!-- end .list-grid-view -->


							<!-- end .page-list -->
						</div>
						<!-- end view-style -->

						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-1">
								<div class="all-menu-details">
									<h5>Daily Menu</h5>
									<?php
									for($i=0;$i<count($array['data']['menu'][$_GET['cat']]['items']) ; $i++){
										$itemName=$array['data']['menu'][$_GET['cat']]['items'][$i]['name'];
										$item=$array['data']['menu'][$_GET['cat']]['items'][$i];

										?>
										<div class="item-list right-checkout">
											<div class="list-image">
												<img src="img/content/menu-list-img.jpg" alt="">
											</div>
											<div class="all-details" id="<?php echo $itemName.":".'details';?>">
												<div class="visible-option">
													<div class="details">
														<h6><a href="#"><?php echo strtoupper($array['data']['menu'][$_GET['cat']]['items'][$i]['name']); ?></a>
														</h6>

														<?php if(isset($array['data']['menu'][$_GET['cat']]['items'][$i]['desc']))
														echo ($array['data']['menu'][$_GET['cat']]['items'][$i]['desc']); ?>
													</div>

													<div class="price-option fl">
														<h4 id= "<?php echo $itemName;?>">&#8377;
															<?php if($item['size'])
															echo " ".$array['data']['menu'][$_GET['cat']]['items'][$i]['size'][0]['price'];
															else
																echo " ".$item['price']?></h4>
															<?php if(!($array['data']['menu'][$_GET['cat']]['items'][$i]['simple'])){?>
															<button class="toggle">Option</button>
															<?php }?>
														</div>
														<!-- end .price-option-->
														<div class="qty-cart text-center clearfix">
															<h6>Qty</h6>
															<form class="">
																<input type="text" placeholder="1"id="<?php echo $i.'-quantity';?>">
																<br>
																<button id="<?php echo $itemName.' :cart';?>" onclick="addCartItem('<?php echo  $item['id'];?>', <?php echo count($item['custom']); ?> )"><i class="fa fa-cart-plus"></i>
																</button>
															</form>
														</div> <!-- end .qty-cart -->
													</div> <!-- end .visible-option -->

													<div class="dropdown-option clearfix">
														<div class="dropdown-details">
															<!--<form id="<?php echo $itemName.":".'options';?>"class="default-form">-->
															<form id='<?php echo $item['id'];?>' class='default-form'>
																<?php
																if ($array['data']['menu'][$_GET['cat']]['items'][$i]['size'])
																	{	?>
																<h5> Size</h5>
																<table id="<?php echo 'sizeof'.$i;?>">
																	<?php
																	foreach ($array['data']['menu'][$_GET['cat']]['items'][$i]['size'] as &$size)
																	{
																		?>


																		<tr>
																			<td width="350">
																				<span class="radio-input">
																					<input type="radio" id="<?php echo $itemName.$size['name'];?>" name="<?php echo $item['id']."-size";?>" value="<?php echo $size['id'];?>"onclick="priceUpdateBySize('<?php echo $itemName.":".$size['price'].":".$size['name'];?>')">
																					<label for ="<?php echo $itemName.$size['name'];?>" style="font-weight: normal;"><?php echo $size['name'];?><br></label></span>
																				</td>
																				<td >
																					<i class="fa fa-plus" style="top: 0;  left: 220px; color: #e00000;display: inline;"><?php echo $size['price']?></i></td></tr><?php
																				}?></table><?php
																			}?>
																			<h5>Please Select Your Option</h5>
																			<?php
																			for($j=0;$j<count($array['data']['menu'][$_GET['cat']]['items'][$i]['custom']) ; $j++){
																				?>
																				<h6><?php
																					echo $array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['name']
																					?>
																				</h6>

																				<?php
																//setting variables to be used as keys for radio/check controls
																				$maxOption=$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['max'];
																				$customName=$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['name'];
																				$minOption=$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['min'];

																				if(isset($array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['soft'])){
																					$soft=$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['soft'];}
																					else{
																						$soft=0;
																					}
																					$itemName=$array['data']['menu'][$_GET['cat']]['items'][$i]['name'];
																					if ($maxOption==1){?>
																					<table id="">
																						<?php
																						for($k=0;$k<count($array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options']) ; $k++){
																							$optionName=$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['name'];
																							?>
																							<tr><td width="350">
																								<span class="radio-input">
																									<input type="radio" id="<?php echo $itemName.$customName.$optionName.$k;?>" name="<?php echo $item['id'].'-custom-'.$j;?>" value="<?php echo $k;?>" minselection="<?php echo $minOption;?>" maxselection="<?php echo $maxOption;?>" >
																									<label for="<?php echo $itemName.$customName.$optionName.$k;?>" style="Display: block; width: 100px;">
																										<?php echo $array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['name'];
																										?>
																									</label>
																								</span>
																							</td>
																							<td>
																								<?php if ($array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['price']!=0){?>
																								<i id="<?php echo $i.'-custom-'.$customName.'-price-'.$optionName;?>" class="fa fa-plus" style="top: 0;  left: 220px; color: #e00000;display: inline;">
																									<?php echo $array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['price'];
																								}?>
																							</i>
																						</td>
																					</tr>
																					<?php }?>
																				</table>
																				<?php }
																				else{
																					?>
																					<table>
																						<?php
																						for($k=0;$k<count($array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options']) ; $k++){
																							$optionName=$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['name'];
																							?>
																							<tr><td width="350">
																								<span class ="checkbox-input">
																									<input type ="checkbox" minselection="<?php echo $minOption;?>" maxselection="<?php echo $maxOption;?>"id="<?php echo $itemName.$customName.$optionName.$k;?>" name="<?php echo $item['id'].'-custom-'.$j;?>" value="<?php echo $k;?>" onchange="priceAddByOption('<?php echo $itemName.$customName.$optionName.$k."',".$array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['price'];?>,<?php echo "'".$itemName."'";?>,<?php echo $soft;?>,<?php echo $i;?>,<?php echo $j;?>)">
																									<label for ="<?php echo $itemName.$customName.$optionName.$k;?>"  display: block; width: 100px;>
																										<?php echo $array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['name'];?>
																									</label>
																								</span>
																							</td>
																							<td>
																								<i id="<?php echo $i.'-custom-'.$customName.'-price-'.$optionName;?>" class="fa fa-plus" style="top: 0;  left: 220px; color: #e00000;display: inline;"><?php echo $array['data']['menu'][$_GET['cat']]['items'][$i]['custom'][$j]['options'][$k]['price'];?>
																								</i>
																							</td>
																						</tr>
																						<?php } ?>
																					</table>


																					<?php } ?>


																					<?php }
																					?>		<!-- for loops closed for item and customisation-->
																				</form>
																			</div>
																			<!--end .dropdown-details-->
																		</div>
																		<!--end .dropdown-option-->
																	</div>
																	<!-- end .all-details -->
																</div>

																<!-- end .item-list -->
																<?php
															}
															?>

														</div>
														<!--end all-menu-details-->




													</div> <!-- end .tab-pane -->



												</div> <!-- end .tab-content -->


												<!-- end .pagination -->
											</div>
											<!--end main-grid layout-->


											<div class="col-md-3">
												<div class="my-check-right" id="">
													<h5 class="toggle-title">My Check</h5>
													<ul id="cartlist" class="list-unstyled">

													</ul>
													<ul class="list-unstyled">
														<li>
															<!-- list for total price-->
															<p>Total</p>
															<p id="price-total" class="price-total">

															</p>
														</li>
													</ul>

													<div class="checkout">
														<a class="btn btn-default-red" href="cart.php" onClick="createItemList()"><i class="fa fa-shopping-cart"></i>Checkout</a>
													</div>

												</div>
												<!-- end .chekout class -->
											</div>
										</div>
										<!-- end .row -->
									</div>
									<!--end .container -->
									<!-- footer begin -->
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

														<p><a href="#">takeaway:</a> Take a (Photo) Tour of #Envato's #Melbourne Headquarters (...)<br>
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

								</div> <!-- end .page-content -->
							</div>
							<!-- end #main-wrapper -->

							<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
							<!-- Local jQuery -->
							<script>
								window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
							</script>
							<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
							<script src="js/jquery.magnific-popup.min.js"></script>
							<script src="js/owl.carousel.js"></script>
							<script src="js/bootstrap.js"></script>
							<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
							<script type="text/javascript" src="js/jquery.ui.map.js"></script>
							<script src="js/scripts.js"></script>
							<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

							<script>
								function serializeJSON(id) {
									var jsonData = {};
									var formData = $("#"+id).serializeArray();
									$.each(formData, function(){
										if (jsonData[this.name]) {
											if (!jsonData[this.name].push) {
												jsonData[this.name] = [jsonData[this.name]];
											}
											jsonData[this.name].push(this.value || '');
										} else {
											jsonData[this.name] = this.value || '';
										}
									});
									return jsonData;
								}
							</script>
							<script>

								var  price;
								var items = new Array();
								var softchek=new Array();
								var cartitems=new Array();
								var array=<?php echo json_encode($array); ?>;
								var softcheck=0;

		//function to update price on cart when different size options are checked.
		function priceUpdateBySize(v){

			//check if the item is already present in items object
			for (i = 0; i < items.length; i++)
			{
				if(items[i].name==v.split(":")[0])
				{
					items[i].sizeprice=v.split(":")[1];

					calculatePrice(items[i]);
					return;
				}
			}
			//push if item doesnt exist
			items.push({name:v.split(":")[0],sizeprice:v.split(":")[1],customprices:0});
			calculatePrice(items[i]);
			//softcheck=0;



		}

		function calculatePrice(i)
		{
			var finalprice=parseInt(i.sizePrice)+parseInt(i.customprices);
			document.getElementById(i.name).innerHTML=parseInt(i.customprices)+parseInt(i.sizeprice);
			//adding rupee sign
			document.getElementById(i.name).innerHTML='₹ '+ document.getElementById(i.name).innerHTML;

		}

		//function to implement softcheck
		function checkSoft(soft,itemid,custid,action)
		{
			var custhit=0;var itemhit=0;var customization=[];

			//looping through softcheck as well
				for(i=0;i<softchek.length;i++){
					//check if item already exists in softcheck
					if(softchek[i].item==itemid)
					{
						itemhit=1;
						for(j=0;j<softchek[i].customization.length;j++)
						{
							if(softchek[i].customization[j].customid==custid){
								if(action=='checked'){
									softchek[i].customization[j].soft+=1;console.log('adding soft');
								}
								else{
									softchek[i].customization[j].soft-=1;console.log('subtracting soft')
								}
								custhit=1;
							}
						}
						if(custhit==0){
							customization={customid:custid,
										   softlimit:soft,
										   soft:1};
							softchek[i].customization.push(customization);}

					}


				}
				if(itemhit==0){
					console.log('adding item');
					customization.push({customid:custid,softlimit:soft,soft:1});
					softchek.push({item:itemid,customization:customization});
				}
		}
		//function to add customisation
		function priceAddByOption(id,price,item,soft,itemid,custid)
		{


			var hit=0;
			var softhit=0;
			if(document.getElementById(id).checked)
			{
				checkSoft(soft,itemid,custid,'checked');
				//add custom option to the item object

				for (i = 0; i < items.length; i++)
				{
					if(items[i].name==item){
					//add custom prices
					console.log(softchek[i].item);
					for (m=0;m<softchek.length;m++){
						if(softchek[m].item==itemid){
							for(u=0;u<softchek[m].customization.length;u++){
								if(softchek[m].customization[u].customid==custid){
									if(softchek[m].customization[u].soft>softchek[m].customization[u].softlimit)
										items[i].customprices=parseInt(price)+parseInt(items[i].customprices);

								}
							}
						}
					}
					//items[i].customprices=parseInt(price)+parseInt(items[i].customprices);
					hit=parseInt(hit)+1;
					calculatePrice(items[i]);

										}
				}

			if(hit==0){

				items.push({name:item,sizeprice:document.getElementById(item).innerHTML.split(" ")[1],customprices:0});
				for (i=0;i<items.length;i++)
				{
					if(items[i].name==item){

						for (m=0;m<softchek.length;m++){
						if(softchek[m].item==itemid){
							for(u=0;u<softchek[m].customization.length;u++){
								if(softchek[m].customization[u].customid==custid){
									if(softchek[m].customization[u].soft>softchek[m].customization[u].softlimit)
										items[i].customprices=parseInt(price)+parseInt(items[i].customprices);

								}
							}
						}
					}
						calculatePrice(items[i]);
					}

				}

			}//hit condition ends
		}
		else{
			checkSoft(soft,itemid,custid,'unchecked');
			for (i = 0; i < items.length; i++)
			{
				if(items[i].name==item){
					//subtract prices of unchecked items
					items[i].customprices=parseInt(items[i].customprices)-parseInt(price);
					calculatePrice(items[i]);
				}
			}


		}



	}

	final_order_list = [];
	function checkSizeSelections(item)
	{

		var keyz='sizeof'+item;
		if(document.getElementById(keyz)==null)
			return true;
		var size=document.getElementById(keyz).getElementsByTagName('input');

		for(i=0;i<size.length;i++){
			if(size[i].checked)
			{
				return true;
			}
		}
		return false;



	}

	function checkCustomSelections(item,cust_count)
	{
		var keyz;var min;var n=0;var max
		var faults=[];
		console.log("Entering loop");
		for (i=0;i<cust_count;i++){
			n=0;
			keys=item+'-custom-'+i;
			min=document.getElementsByName(keys)[0].getAttribute("minselection");
			max=document.getElementsByName(keys)[0].getAttribute("maxselection");
			var el=document.getElementsByName(keys);

			for (j=0;j<el.length;j++)
			{
				if(el[j].checked)
				{
					n=n+1;
				}
			}
				//filtering out non-faults if min and max selections are set to 0
				if(min==0 && max==0){
					console.log("No min max limit for customization number "+i );

				}
				else if(max==0 || min==0){
					if(max==0)
					{
						console.log("Min limit set for customization number "+i);
						if(n<parseInt(min)){
							console.log("Fault pushed for customization number "+i+" (selection less than min asked)");
							faults.push("custom"+i);
						}

					}
					else if(min==0){
						console.log("Max limit set for customization number "+i);
						if(n>parseInt(max)){
							console.log("Fault pushed for customization number "+i+" (selection more than max allowed)");
							faults.push("custom"+i);
						}

					}

				}
				else{
					console.log("Min max limit set for customization number " + i);
					if(n<parseInt(min) || n>parseInt(max) ){
						console.log("Pushing fault for customization nummber "+i);
						faults.push("custom"+i);
					}
				}

			}

			if(faults.length==0)
			{
				return true;
			}
			else
			{
				return false;
			}

		}




		function addCartItem(item, cust_count)
		{
			if (!checkSizeSelections(item)){alert("Make a size selection");return;}
			if (!checkCustomSelections(item,cust_count)){alert("Faulty Selections in customization Options");return;}
			var formData=serializeJSON(item);
			order = {};
			key=item+"-size";

			if(formData.hasOwnProperty(key))
			{

				order.size=formData[key];
			}
			else{
				order.size="";
			}
			order.category=parseInt(<?php echo $_GET['cat'];?>);
			order.item=item;
			if(document.getElementById(item+"-quantity").value!="")
				order.quantity=document.getElementById(item+"-quantity").value;

			else
				order.quantity=1;
			order.price=document.getElementById(array['data']['menu']['<?php echo $_GET['cat'];?>']['items'][item]['name']).innerHTML;

			custom_obj = []
			//console.log("custom_count"+cust_count)
			for (i=0; i < cust_count; i++) {
				key = item + '-custom-' + i
				if (formData.hasOwnProperty(key)) {
					if (typeof formData[key] === "string") {
						custom_obj.push([parseInt(formData[key])])
					} else {
						sub_array = []
						formData[key].forEach(function(item){
							sub_array.push(parseInt(item))
						})
						custom_obj.push(sub_array)
					}
				} else {
					custom_obj.push([])
				}
			}
			// todo, add qty, size
			order['custom'] = custom_obj
			console.log(order);
			console.log("order");
			//final_order_list.push(order)
			//console.log(final_order_list);
			$.when($.post("session.php",{final_order_list:order},function(data) {})).then(function( data, textStatus, jqXHR ) {
  refreshCart(); // Alerts 200
});



		}

		function refreshCart()
		{
			document.getElementById('cartlist').innerHTML="";
			$.when($.post("cart_session.php",{},function(data) {final_order_list=jQuery.parseJSON(data);})).then(function(){
				console.log(final_order_list); fnlRefresh();
			});
		}

		function fnlRefresh(){

			var itemmname;
			if(final_order_list!=null){
				for(i=0;i<final_order_list.length;i++){
					var custom=[];
					itemname=array['data']['menu'][final_order_list[i].category]['items'][final_order_list[i].item]['name'];

					if(final_order_list[i].custom){
						for(index in final_order_list[i].custom){

							custom[array['data']['menu'][final_order_list[i].category]['items'][final_order_list[i].item]['custom'][parseInt(index)]['name']]=[];
							for(k=0;k<final_order_list[i].custom[parseInt(index)].length;k++){


								custom[array['data']['menu'][final_order_list[i].category]['items'][final_order_list[i].item]['custom'][parseInt(index)]['name']].push(
									array['data']['menu'][final_order_list[i].category]['items'][final_order_list[i].item]['custom'][parseInt(index)]['options']
									[final_order_list[i].custom[parseInt(index)][k]]['name']);
							}
						}}
						custom['Size']=[];
						if(final_order_list[i].size)
							custom['Size'][0]=array['data']['menu'][final_order_list[i].category]['items'][final_order_list[i].item].size[final_order_list[i].size].name.toString();
						else
							custom['Size'][0]="N/A";
						custom['Quantity']=final_order_list[i].quantity;
						var itemli=document.createElement('LI');
						itemli.innerHTML=itemname;
						var customization=document.createElement('OL');

						console.log(custom);
						for(strkey in custom)
						{
							var li2=document.createElement('LI');
							li2.innerHTML=strkey;
							var ol2=document.createElement('OL');

							for (k in custom[strkey])
							{

								var li3=document.createElement('LI');
								if(document.getElementById(i+'-custom-'+strkey+'-price-'+custom[strkey][parseInt(k)])!=null)
									temp=document.getElementById(i+'-custom-'+strkey+'-price-'+custom[strkey][parseInt(k)]).innerHTML
								else
									temp=0;
								li3.innerHTML=custom[strkey][parseInt(k)] + " - ₹ " +temp;
								ol2.appendChild(li3);
							}
							li2.appendChild(ol2);
							customization.appendChild(li2);

						}

						itemli.appendChild(customization);
						document.getElementById('cartlist').appendChild(itemli);

					}
				}
				console.log(final_order_list);
			}

					function removeFromCart(item)
					{
						alert(item);
					}

					function createItemList()
					{
						var options;
						for (i=0;i<cartitems.length;i++)
						{
							options=document.getElementById(cartitems[i].name+":"+"options").getElementsByTag('input');
							for(j=0;j<options.length;j++)
							{
								if(options[j].checked){
									alert(options[j].id);
								}
							}

						}
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

function register(){
	var register={};
	register.email=document.getElementById('register-email').value;
	register.password=document.getElementById('register-password').value;
	register.vendor_id=1;
	console.log(register);
	console.log('making ajax');
	$.when($.ajax({
		url:'http://lannister-api.elasticbeanstalk.com/tyrion/user/signup',
		type:'post',
		dataType:'json',
		success: function(data){
			console.log(data);
			if(!data.success)
				alert(data.reason);
			if(data.data)
				alert("Your details have been registered");
		},
		data: JSON.stringify(register)
	})).then(function(){location.reload(true);});

}
$(document).ready(function(){
	t="<?php if(isset($_SESSION['uname']))
	echo $_SESSION['uname'];
	else
		echo "NA";
	?>";
	if(t!="NA"){
		$('#login-row').toggle();
		$('#default-row').toggle();
	}
});

$('.options-dropdown').on('click',function(){
	$('.options-dropdown-ul').slideToggle();
});

</script>

<script>
	refreshCart();
</script>


</body>

</html>

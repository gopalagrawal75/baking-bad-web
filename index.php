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
	<title>Home-BakingBad</title>
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
<?php include('overlay.php');?>
<div id="main-wrapper">
<?php include('header.php');?>		<!-- end #header -->

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
									<img src="img/content/<?php echo $array['data']['menu'][$i]['category'];?>.jpg">
									<?php
										echo "<h4>".strtoupper($array['data']['menu'][$i]['category'])."</h4>";
									?>	
										<a href="show.php?cat=<?php echo $array['data']['menu'][$i]['id']; ?>"><figcaption> 
										</figcaption></a> 
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

			

			<!--Start blog feed section-->
			

		</div>
		<!-- end #page-content -->
		<!--footer start-->
		<footer id="footer">
			<div class="container">
				<div class="main-footer">
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<img src="img/logo.png" alt="">
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

	
	
		$(document).ready(function(){
		t="<?php if(isset($_SESSION['uname']))
							echo $_SESSION['uname'];
						else
							echo NA;
						?>";
					if(t!="NA"){
							$('#login-row').toggle();
							$('#default-row').toggle();
						}
			$('.small-menu').hide();
	});
	
	//for order history

$(function() {
    $('#activator').click(function(){
    	 $('#overlay').fadeIn('fast',function(){
            $('#box').animate({'top':'80px'},500);
        });
    	 
    });
    $('#order-retrieve').click(function(){
    	//making ajax request to retrieve orders
    	 var email="<?php if (isset($_SESSION['uname'])) echo $_SESSION['uname'];
    	 			else echo "NA";?>";
    	 if(email!='NA')
    	 {
    	 	
    	 		url='http://lannister-api.elasticbeanstalk.com/tyrion/history?email='+email+'&vendor_id=1&status=placed,accepted,cancelled,ready,delayed,delivered';
    	 		$.when($.ajax({
    	 			url:url,
    	 			type:'get',
    	 			success:function(data){
    	 				
    	 				orderhistory=data;
    	 				
    	 			}
    	 		})).then(function(){ 
    	 				
    	 				if(orderhistory.success=="false"){
    	 					$('#orders').html("<div> Some error occured, please try some other time</div");
    	 				}
    	 				else {
    	 					if(orderhistory.data.length==0)
    	 					$('#orders').html("<div> No orders that match given criteria</div");
    						else{
    						for (q=0;q<orderhistory.data.length;q++)
    						{	
    							
    							    							
    							$('#orders').append("<div id='order-" + q + "''><b> Order Number : </b>" + orderhistory.data[q].order_number + 
    												"<br><b> Total Price : </b>" + orderhistory.data[q].total + 
    												"<br> <h6>Status : </h6>" + orderhistory.data[q].status + "</div>");
    							
    							//collecting items
    							for (m=0;m<orderhistory.data[q].order.length;m++){
    							$('#order-'+q).append("<br>Item : " + orderhistory.data[q].order[m]['name'] + 
    							"<br> Quantity : " + orderhistory.data[q].order[m]['quantity'] + 
    							"<br> Price : " + orderhistory.data[q].order[m]['sub_total'] +
    							"<br> Customization : "+ orderhistory.data[q].order[m]['custom'] + 
    							"<br>");
    							}
    							$('#order-'+q).append("<br>-------------");

    							
    							
    												
    						}
    	 					}
    						}
    	 				
    	 				
    	 	
    	 });
    	
    }
});
    $('#boxclose').click(function(){
        $('#box').animate({'top':'-520px'},500,function(){
            $('#overlay').fadeOut('fast');
        });
    });

});
	</script>

</body>

</html>

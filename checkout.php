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

	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->
</head>

<body>
<?php include('overlay.php');?>
 
 	<div id="main-wrapper">
		<?php include('header.php');?>
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
																<input type="text" class="input-text"  name="billing-first-name" required>
															</p>
															<p class="form-row form-row-last" id="billing-last-name">
																<label for="billing-last-name" class>
																	Last Name
																	<abbr class="required" title="required">*</abbr>
																</label>
																<input type="text" class="input-text"  name="billing-last-name" required>
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
																
																	<input type="text" id="billing-address-1" name="billing-address-1" class="input-text" placeholder="Street Address" required>
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
																		<p id="del-charge" style="padding-top: 0;background-color: #FFEFEF;"> </p>
																</p>
																<p class="form-row form-row-wide address-field"  id="billing-postcode">
																<label for="billing-postcode"> Postcode
																	<abbr class="required" title="required">*</abbr>
																	</label>
																	<input name="postcode" type="text" class="input-text" required>
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
																<input name="phone" type="text" class="input-text" required>
															</p>
															<p class="form-row form-row-first" id="billing-email">
																<label for="billing-email"> E-mail
																<abbr class="required" title="required">*</abbr>
																</label>
																<input id="email" name="email" type="text" class="input-text" required>
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
<?php include('footer.php');?>
<script>

	email="<?php if (isset($_SESSION['uname'])) 
					{echo $_SESSION['uname'];} 
				else 
					{echo "NA";}?>";
	charges=<?php echo json_encode($charges);?>;
	
	var address=<?php echo json_encode($address);?>;
	$(document).ready(function(){
		
			$('#checkout-submit').prop('disabled',false);
			$('#login-prompt').prop('disabled',true);
			if(email!="NA")
			{
			$('#login-row').show();
			$('#default-row').hide();
			}
			else
			{
			$('#login-row').hide();
			$('#default-row').show();
			}
			
			if(email!="NA")
				$('#email').val(email);
		
			$('#checkout').addClass('active');
			$('#toast').html("Checkout");
			showAddress();
			$('#del-charge').hide();

		});
	
	$(function(){
		$('select[name=areas').on('change', function() {
  		for (i=0;i<charges['data'].length;i++){
  			
  			if($('select[name=areas').val()==charges['data'][i].area){
  				$('#del-charge').html('<b> *The delivery charges for selected area shall be ₹ ' + charges['data'][i].charges + '</b>');
  				$('#del-charge').show();
  				return;
  			}
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
		$('select[name=areas').trigger('change');
		$('#db-addresses').slideToggle();
		
	}

	
	
	$('.options-dropdown').on('click',function(){
	$('.options-dropdown-ul').slideToggle();
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
    	 				console.log("order");
    	 				orderhistory=data;
    	 				console.log(orderhistory);
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
</html>




<?php
error_reporting(E_ALL);
session_start();
$array=$_SESSION['menu'];
$order=$_SESSION['final_order'];
$ress=$_SESSION['address'];

if($_POST)
		{
				$name=$_POST['billing-first-name'].' '.$_POST['billing-last-name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$address=$_POST['billing-address-1'].' '.$_POST['billing-address-2'].'Delhi - '.$_POST['postcode'];
				$area=$_POST['areas'];
				$vendor_id=1;
		}
?> 
<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" href="css/woocommerce_lay.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
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
								<a href="#" onclick="loginBox()">Login</a>
								<div class="login-box">
        							<form id="bg-login-form" method="post"  role="form">
                 						 <p class="status"></p>
                 						 <input type="text" id="login-email" name="login_username" value="" class="form-control" placeholder="Username">
                 						 <input type="password" id="login-password" name="login_password" value="" class="form-control" placeholder="Password">
                						  <p class="submit form-row">
                  							  <input type="button" name="wp-submit" id="bg-login" class="btn btn-default-red-inverse" value="Login" onclick="login()">
                    						   <input type="hidden" name="redirect_to" value="http://188.226.173.21/takeawaywp">
                   								 <input type="hidden" name="testcookie" value="1">
                 						 </p>
                                   		 <a href="http://188.226.173.21/takeawaywp/wp-login.php?action=lostpassword" class="btn btn-link">Forgot Password?</a>
                						  <input type="hidden" id="security" name="security" value="451822321c">
                						  <input type="hidden" name="_wp_http_referer" value="/takeawaywp/cart/">                
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
		<!-- end #header -->

		<div class="page-content">
			<div class="new-events-blog page-format">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="post-10 page type-page status-publish hentry blog-post">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<h4> Confirm Order </h4>
										<div class="woocommerce">
											<div class="woocommerce-info">
											</div>
											<h4> Your Order</h4>
											<div id="order-review" style="zoom:1;">
												<table class="shop_table" width="100%">
													<thead>
													<tr>
														<td class="product-name">Product</td>
														<td class="product-total">Total</td>
													</tr>
													</thead>
													<tbody id="order">
													</tbody>
												</table>
											</div><!--order-review ends-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							
							<div   class='cart_totals'>
								<h4> Totals</h4>
								<table width="30%" cellspacing="0">
									<tbody>
										<tr class="cart-subtotal">
											<th> Cart-Subtotal</th>
											<td><span id='amount' class="amount">669</span></td>
										</tr>
										<tr class="shipping">
											<th> Shipping </th>
											<td id='shipping'>5509</td>
										</tr>
										<tr>
											<th> Service Charge</th>
											<td id='service'>445</td>
										</tr>
										<tr> 
											<th> Service Tax</th>
											<td id='tax'>34</td>
										</tr>
										<tr> 
											<th> VAT</th>
											<td id='vat'>22</td>
										</tr>
										<tr>
											<th> Total</th>
											<td id='total'>84</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div> <!--Main wrapper end-->
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>

var totalamt=0;//variable to record cart subtotal
var final_order={
		vendor_id:1,
		email:"<?php echo $email;?>",
		phone:"<?php echo $phone;?>",
		name:"<?php echo $name;?>",
		address:"<?php echo $address;?>",
		area:"<?php echo $area;?>",
					};
final_order.order=[];

var order=<?php echo json_encode($order);?>;
var array=<?php echo json_encode($array);?>;
var order2=[];
	for(i=0;i<order.length;i++)
	{	
		order2[i]={};
		order2[i].category=parseInt(order[i].category);
		order2[i].item=parseInt(order[i].item);
		order2[i].qty=parseInt(order[i].quantity);
		order2[i].size=parseInt(order[i].size);
		order2[i].custom=[[]];
		totalamt=totalamt+(parseInt(order[i].quantity)*parseInt(order[i].price.split(" ")[1]));
		if(order[i].custom){
		var key=Object.keys(order[i].custom);
		//console.log(typeof order[i].custom);
		console.log(key);
		var max=0;
		for (j=0;j<key.length;j++) //finding the biggest index in order[i].custom
		{
			k=parseInt(key[j]);
			if(k>max)
				max=k;

		}
		for (j=0;j<=max;j++)
		{
			if(j in order[i].custom){
				order2[i].custom[j]=[];
				order2[i].custom[j]=order[i].custom[j];
			}
			else
				order2[i].custom[j]=[];
			
		}}
		else
			order2[i].custom.push([]);

		
		
		final_order.order.push(order2[i]);
	}
	//filling up cart subtotal amount
	document.getElementById('amount').innerHTML='₹ '+totalamt;
	

	//parsing final order to integer
	console.log(JSON.parse(JSON.stringify(final_order)));
	for (i=0;i<final_order.order.length;i++)
	{
		if(parseInt(final_order.order[i].category)>=3)
			{delete final_order.order[i].size;
			delete final_order.order[i].custom;
			}

		if(final_order.order[i].custom){
		for (j=0;j<final_order.order[i].custom.length;j++)
		{

			for (k=0;k<final_order.order[i].custom[j].length;k++)
			{
				final_order.order[i].custom[j][k]=parseInt(final_order.order[i].custom[j][k]);	
			}
		}
	}
}
	console.log("parsed");
	console.log(JSON.stringify(final_order));


var response;
	function submit(){
		console.log("final");
		console.log(JSON.stringify(final_order));
	$.ajax({
            url: 'http://lannister-api.elasticbeanstalk.com/tyrion/order',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                
                response=data;
                console.log(response);
                document.getElementById('shipping').innerHTML=response['data']['delivery_charges'];
				document.getElementById('service').innerHTML=response['data']['service_charge'];
				document.getElementById('tax').innerHTML=response['data']['service_tax'];
				document.getElementById('vat').innerHTML=response['data']['vat'];
				document.getElementById('total').innerHTML=response['data']['price'];
            },
            data: JSON.stringify(final_order)
        });
}




function populate()
{
	submit();
	document.getElementById('order').innerHTML="";
	if(order.length==0){alert("Your cart is empty!!");return;}
	for(i=0;i<order.length;i++){
		var itemname=array['data']['menu'][order[i].category]['items'][order[i].item]['name'];
		var custom=[];
		if(order[i].custom){
			for (index in order[i].custom){
				custom[array['data']['menu'][order[i].category]['items'][order[i].item]['custom'][parseInt(index)]['name']]=[];
					for (j=0;j<order[i].custom[parseInt(index)].length;j++){
							custom[array['data']['menu'][order[i].category]['items'][order[i].item]['custom'][parseInt(index)]['name']].push(
									array['data']['menu'][order[i].category]['items'][order[i].item]['custom'][parseInt(index)]['options']
									[order[i].custom[parseInt(index)][j]]['name']);
						} //j loop ends here
			} //custom indexing ends here
		} //check for customization in order ends here
		custom['Size']=[];
		if(order[i].size)
		custom['Size'][0]=array['data']['menu'][order[i].category]['items'][order[i].item].size[order[i].size].name.toString();
		else
		custom['Size'][0]="N/A"	
		custom['Quantity']=order[i].quantity;
		//Populating

	var tr=document.createElement('TR');
	tr.className='cart_item';
	//creating data-items;
	var td_product=document.createElement('TD');
	td_product.className="product-name";
	//add size (if applicable)
	td_product.innerHTML=itemname + ' - ';
	if(custom['Size']!='N/A')
			td_product.innerHTML=td_product.innerHTML+custom['Size'];
	//creating customization detail for item (if available)
	td_product.innerHTML=td_product.innerHTML+' (';
	for (str in custom)
	{
		//skip displaying size and quantity
		if((str=='Size')|| (str=='Quantity' ))
		{}
		//do nothing
		else
			td_product.innerHTML=td_product.innerHTML + ' '+custom[str][0]+ ',';
	}

	//closing parenthesis
	td_product.innerHTML=td_product.innerHTML.substring(0,td_product.innerHTML.length-1) + ' )';
	tr.appendChild(td_product);
	//adding quantity
	td_product.innerHTML=td_product.innerHTML+'---------x'+custom['Quantity'];

	var td_total=document.createElement('TD');
	td_total.className="product-total";
	td_total.innerHTML='₹ '+ parseInt(order[i].price.split(" ")[1])*parseInt(order[i].quantity);
	tr.appendChild(td_total);

	//appending data-items to table
	document.getElementById("order").appendChild(tr);
	}
}
res=<?php echo json_encode($ress);?>;
function pushAddress()
{
	
	var hit=0;
	if(res!=null && res.success=="true"){
	for (i=0;i<res.data.length;i++){
		if(res.data[i][0].area=='<?php echo $_POST['areas'];?>' && res.data[i][0].address=='<?php echo $_POST['billing-address-1'];?>'){
			hit+=1;
		}
	}
	if(hit>=1)
		return;
	else{
		var push={
			email : "<?php echo $_SESSION['uname'];?>",
			vendor_id : 1,
			address : 
			[
				{	
					pincode : "<?php echo $_POST['postcode'];?>",
					address : "<?php echo $_POST['billing-address-1'];?>",
					area : "<?php echo $_POST['areas'];?>"
				}
			]
		}
		//ajax call to push new address in db
		$.when($.ajax({
		url:'http://lannister-api.elasticbeanstalk.com/tyrion/address',
		type:'post',
		dataType:'json',
		success: function(data){
			console.log(data);
			if(!data.success)
				alert(data.reason);
			if(data.data)
				alert("Your details have been registered");
		},
		data: JSON.stringify(push)
	})).then(function(){});
	}
	
}
else
{	
	var push={
			email : "<?php echo $_SESSION['uname'];?>",
			vendor_id : 1,
			address : 
			[
				{	
					pincode : "<?php echo $_POST['postcode'];?>",
					address : "<?php echo $_POST['billing-address-1'];?>",
					area : "<?php echo $_POST['areas'];?>"
				}
			]
		}
		//ajax call to push new address in db
		$.when($.ajax({
		url:'http://lannister-api.elasticbeanstalk.com/tyrion/address',
		type:'post',
		dataType:'json',
		success: function(data){
			console.log(data);
			if(!data.success)
				alert(data.reason);
			if(data.data)
				alert("Your details have been registered");
		},
		data: JSON.stringify(push)
	})).then(function(){});

}
}

$(document).ready(function(){
	populate();
	pushAddress();
	

});
</script>
</html>
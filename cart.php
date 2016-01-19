<?php 
error_reporting(E_ALL);
session_start();
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
	<link rel="stylesheet" href="css/test.css">
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
							<li class="active"><a href="#">2. Confirm</a>
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

		<div class="page-content">
		<div class="news-events-blog page-format">
		<div class="container">
		<div class="row">
		<div class="col-md-12">
		<h4> Cart</h4>
		<div class="woocommerce">
		<div class="woocommerce-message">
		<a id="test"class="button wc-forward">Continue Shopping </a>	
		</div>
		<form>
		<table style="width:100%" class="shop_table cart" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">Product</th>
				<th class="product-price">Price</th>
				<th class="product-quantity">Qty.</th>
				<th class="product-subtotal">total</th>
			</tr>
		</thead>
		<tbody id="cart">
			<!--<tr class="cart_item">
				<td class="product-remove"><a class="remove" title="Remove this item">x</a><td>
				<td class="product-thumbnail">&nbsp;</td>
				<td class="product-name">Make your own Pizza</td>
				<td class="product-price">Price</td>
				<td class="product-quantity">Qty.</td>
				<td class="product-subtotal">slk</td>
			</tr>-->
			
		</tbody>
		</table>
		<table>
		<tr>
				<td colspan="6" class="actions">
				<p>
					<input type="submit" class="checkout-button button alt wc-forward" value="Proceed to Checkout">
				</p>
				</td>
			</tr>
		</table>
		</form>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div><!--Main Wrapper End-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
var array=<?php echo json_encode($array); ?>;
var order=<?php echo json_encode($order);?>;

function populateCart()
{	

	document.getElementById('cart').innerHTML="";
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
		custom['Size'][0]=array['data']['menu'][order[i].category]['items'][order[i].item].size[order[i].size].name.toString();
		custom['Quantity']=order[i].quantity;

		//Populating cart table
		var tr=document.createElement('TR');
		tr.id=i+"-row";
		tr.className="cart_item";
		//Creating first data item
		var td_remove=document.createElement('TD');
		td_remove.className="product-remove";
		var a=document.createElement('A');
		a.className="remove";a.title="Remove this item";
		a.id=order[i].item+"-remove";a.setAttribute('onclick','removeItem('+order[i].item+');');
		a.innerHTML="x";
		td_remove.appendChild(a);
		tr.appendChild(td_remove);//fist data item complete and appended to row
		//Creating second data item
		var td_thumb=document.createElement('TD');
		td_thumb.className="product-thumbnail";
		td_thumb.innerHTML='\xa0';
		tr.appendChild(td_thumb);//second data item completed and appended to row
		//Creating 3rd data  item
		var td_name=document.createElement('TD');
		td_name.className="product-name";
		td_name.innerHTML=itemname;
		tr.appendChild(td_name); //3rd data item complete and appended to row
		//Creating 4th data item
		var td_price=document.createElement('TD');
		td_price.className="product-price";
		
		td_price.innerHTML=order[i].price;
		tr.appendChild(td_price);//4th data item completed and appended to row
		//Creating 5th data item
		var div=document.createElement('DIV');
		div.className="quantity buttons_added";
		div.style.textAlign="left";div.style.display="inline-block";
		var minus=document.createElement('INPUT');
		minus.type="button";minus.className="minus";minus.value="-";
		minus.setAttribute('onclick','decrementQuantity('+i.toString()+','+order[i].price+');');
		var plus=document.createElement('INPUT');
		plus.type="button";plus.className="plus";plus.value="+";
		plus.setAttribute('onclick','incrementQuantity('+i.toString()+','+order[i].price+');');
		var input=document.createElement('INPUT');
		input.type="number";input.step="1";input.className="input-text qty text";
		input.id=i+"-quantity";input.value=parseInt(order[i].quantity);
		div.appendChild(minus);div.appendChild(input);div.appendChild(plus);
		var td_qty=document.createElement('TD');
		td_qty.className="product-quantity";
		td_qty.appendChild(div);
		tr.appendChild(td_qty); //5th data item completed and appended to row
		//Creating 6th data item
		var td_total=document.createElement('TD');
		td_total.className="product-subtotal";
		td_total.id=i+"-price";
		td_total.innerHTML=order[i].price;
		tr.appendChild(td_total);//6th data item completed and appended to row

		//Appending new data row to the cart table
		document.getElementById("cart").appendChild(tr);

					
	}//i loop ends here
}//Populated cart

function incrementQuantity(id,price){
	var key=id+"-quantity";
	var i=document.getElementById(key);
	i.value=parseInt(i.value)+1;
	//updating price
	key=id+"-price";
	i=document.getElementById(key);
	i.innerHTML=parseInt(i.innerHTML)+price;
}

function decrementQuantity(id,price){
	var key=id+"-quantity";
	var i=document.getElementById(key);
	var val=parseInt(i.value-1);
	if(val>=1){
	i.value=val;
	//updating price
	key=id+"-price";
	i=document.getElementById(key);
	i.innerHTML=parseInt(i.innerHTML)-price;	
}
	else{return;}
}

function removeItem(item)
{
	
	$.when($.post("removeitem.php",{item_remove:item},function(data){console.log(data);})).then(function(){ 
		key=item+"-row";
		document.getElementById("cart").deleteRow("key");});
	
}

populateCart();
</script>

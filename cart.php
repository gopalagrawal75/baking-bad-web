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
	<link rel="stylesheet" href="css/woocommerce.css">
	<link rel="stylesheet" href="css/woocommerce_lay.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/cartstyle.css">


	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
<![endif]-->

</head>

<body>
<?php include('overlay.php');?>
	<div id="main-wrapper">
		<?php include('header.php');?>
		<!-- end #header -->

		<div class="page-content">
			<div class="news-events-blog page-format">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h4> Cart</h4>
							<div class="woocommerce">
								<div class="woocommerce-message">
								<p id="message">  </p>	
								</div>
								<form action="checkout.php" method="post">
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
												
											</tbody>
											<tfoot>
											<tr>
												<th></th><th></th><th></th><th></th>
												<th>Service Tax</th><th id='tax'></th>
											</tr>
											<tr>
												<th></th><th></th><th></th><th></th>
												<th> Total Amount</th><th id='total'></th>
											</tfoot>
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
</body>
<?php include('footer.php');?>
<script>
var array=<?php echo json_encode($array); ?>;
var order=<?php echo json_encode($order);?>;


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
function populateCart()
{	
	document.getElementById('cart').innerHTML="";
	if(order.length==0 || order==null){$('#message').html("Please add items to your cart!");return;}
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
		minus.setAttribute('onclick','decrementQuantity('+i.toString()+','+order[i].price.split(" ")[1]+');');
		var plus=document.createElement('INPUT');
		plus.type="button";plus.className="plus";plus.value="+";
		plus.setAttribute('onclick','incrementQuantity('+i.toString()+','+order[i].price.split(" ")[1]+');');
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
		td_total.innerHTML='₹ ' + parseInt(order[i].price.split(" ")[1])*parseInt(order[i].quantity);
		tr.appendChild(td_total);//6th data item completed and appended to row

		//Appending new data row to the cart table
		document.getElementById("cart").appendChild(tr);

					
	}//i loop ends here
	service_tax();
}//Populated cart

//to calculate total amount and appy service tax
function service_tax()
{	
	var total=0;
	for (i=0;i<order.length;i++){
		total=total+((parseInt(order[i].quantity)*parseInt(order[i].price.split(" ")[1])));
	}
	var tax=parseInt(total)*0.056;
	total=total+tax;
	$('#tax').html('₹ ' + tax);
	$('#total').html('₹ ' + total);
}

function incrementQuantity(id,price){
	var key=id+"-quantity";
	var i=document.getElementById(key);
	i.value=parseInt(i.value)+1;
	//updating qty in order variable
	order[id].quantity=i.value;
	//updating price
	key=id+"-price";
	j=document.getElementById(key);
	p=(parseInt(order[id].price.split(" ")[1]));
	j.innerHTML=p*parseInt(i.value);
	//adding rupee sign
	j.innerHTML='₹ '+j.innerHTML;
	//update session variable
	$.when($.post("update_session.php",{final_order_list:order},function(data) {console.log(data)})).then(function(){service_tax();});
	
}

function decrementQuantity(id,price){
	var key=id+"-quantity";
	var i=document.getElementById(key);
	var val=parseInt(i.value-1);
	if(val>=1){
	i.value=val;
	order[id].quantity=i.value;
	console.log(order[id]);
	//updating price
	key=id+"-price";
	i=document.getElementById(key);
	i.innerHTML=parseInt(i.innerHTML.split(" ")[1])-price;	
	//adding rupee sign
	i.innerHTML='₹ '+i.innerHTML;
	$.when($.post("update_session.php",{final_order_list:order},function(data) {console.log(data)})).then(function(){service_tax();});

			}
	else 
		return;
}

function removeItem(item)
{
	
	$.when($.post("removeitem.php",{item_remove:item},function(data){console.log(data);})).then(function(){ 
		key=item+"-row";
		//document.getElementById("cart").deleteRow("key");
		location.reload();});
	
}

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
	$('#toast').html("Cart");
	$('#confirm').addClass("active");
	});
$('.options-dropdown').on('click',function(){
	$('.options-dropdown-ul').slideToggle();
	});

populateCart();
</script>
</hmtl>

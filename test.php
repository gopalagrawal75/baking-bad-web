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
<?php include('overlay.php');?>
<div id="main-wrapper">
<?php include('header.php');?>		<!-- end #header -->

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
											<td><span id='amount' class="amount"></span></td>
										</tr>
										<tr class="shipping">
											<th> Shipping </th>
											<td id='shipping'></td>
										</tr>
										<tr>
											<th> Service Charge</th>
											<td id='service'></td>
										</tr>
										<tr> 
											<th> Service Tax</th>
											<td id='tax'></td>
										</tr>
										<tr> 
											<th> VAT</th>
											<td id='vat'></td>
										</tr>
										<tr>
											<th> Total</th>
											<td id='total'></td>
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
<?php include('footer.php');?>
<script>
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
$('#checkout').addClass("active");
});
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
                document.getElementById('shipping').innerHTML='₹ ' + Math.round(response['data']['delivery_charges']);
				document.getElementById('service').innerHTML='₹ ' + Math.round(response['data']['service_charge']);
				document.getElementById('tax').innerHTML='₹ ' + Math.round(response['data']['service_tax']);
				document.getElementById('vat').innerHTML='₹ ' + Math.round(response['data']['vat']);
				document.getElementById('total').innerHTML='₹ ' + Math.round(response['data']['price']);
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
<?php
error_reporting(E_ALL);
session_start();
$order=$_SESSION['final_order'];
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
	<title></title>
</head>
<body>
<?php echo $name;?>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">

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
var order2=[];
	for(i=0;i<order.length;i++)
	{	
		order2[i]={};
		order2[i].category=parseInt(order[i].category);
		order2[i].item=parseInt(order[i].item);
		order2[i].qty=parseInt(order[i].quantity);
		order2[i].size=parseInt(order[i].size);
		order2[i].custom=[[]];
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
	//parsing final order to integer
	console.log(JSON.parse(JSON.stringify(final_order)));
	for (i=0;i<final_order.order.length;i++)
	{
		for (j=0;j<final_order.order[i].custom.length;j++)
		{
			for (k=0;k<final_order.order[i].custom[j].length;k++)
			{
				final_order.order[i].custom[j][k]=parseInt(final_order.order[i].custom[j][k]);	
			}
		}
	}
	console.log("parsed");
	console.log(JSON.stringify(final_order));

	$.ajax({
            url: 'http://lannister-api.elasticbeanstalk.com/tyrion/order',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            },
            data: JSON.stringify(final_order)
        });


</script>
</html>
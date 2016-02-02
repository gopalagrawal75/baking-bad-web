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
				total=0;
				for (i=0;i<final_order_list.length;i++)
				{
					total+=parseInt(final_order_list[i].quantity)*parseInt(final_order_list[i].price.split(" ")[1]);
				}
				//updating total price in mycheck
				document.getElementById('price-total').innerHTML='₹ '+total;
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
    	 	
    	 		url='http://lannister-api.elasticbeanstalk.com/tyrion/history?email='+email+'&vendor_id=1&status='+$('#order-filter :selected').text();
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
    												"<br><b> Total Price : </b>" + orderhistory.data[q].total + "</div>");
    							
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
			                			$.post("address.php",{address:data},function(data){});
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
							echo NA;
						?>";
					if(t!="NA"){
							$('#login-row').toggle();
							$('#default-row').toggle();
						}
	});
	function toggleRow()
	{
		
	}
	$('.options-dropdown').on('click',function(){
	$('.options-dropdown-ul').slideToggle();
	});
	</script>


</body>

</html>
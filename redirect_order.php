<?php 
error_reporting(E_ALL);
session_start();
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
<html lang="en">
<head>
	<title></title>
</head>
<body>
	<h1>sadsd</h1>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
function test(){

}
</script>
</html>
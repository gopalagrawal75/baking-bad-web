<?php
session_start();
$order=json_encode($_SESSION['final_order']);
$order=json_decode($order,true);

for ($i=0;$i<count($order);$i++){
	if($order[$i]['item']==$_POST['item_remove'])
	{
		array_splice($order,$i,1);
	}
}

	$_SESSION['final_order']=$order;
	print_r($_SESSION['final_order']);

?>


<?php
session_start();
if($_GET['erase']==1)
unset($_SESSION['final_order']);
else{
		if($_POST)
		{
			$_SESSION['final_order'][]=$_POST['final_order_list']; 
		}
echo json_encode($_SESSION['final_order']);
}


?>

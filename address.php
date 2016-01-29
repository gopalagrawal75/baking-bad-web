<?php
session_start();
	if($_POST)
		{
			$_SESSION['address']=$_POST['address'];
		}
	print_r ($_SESSION['address']);
	?>
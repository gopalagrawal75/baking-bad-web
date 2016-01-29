<?php 
	error_reporting(E_ALL);
	session_start();
	
		$_SESSION['uname']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];

	
	 echo $_SESSION['uname'];

?>


	
	


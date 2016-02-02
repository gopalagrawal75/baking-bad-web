<?php
	session_start();
	unset($_SESSION['uname']);
	unset($_SESSION['password']);
	unset($_SESSION['address']);
	unset($_SESSION['final_order']);
	echo "log-out";
	?>
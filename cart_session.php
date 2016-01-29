<?php
session_start();
if(isset($_GET['erase']))
unset($_SESSION['final_order']);
echo json_encode($_SESSION['final_order']);
?> 
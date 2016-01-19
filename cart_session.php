<?php
session_start();
if($_GET['erase']==1)
unset($_SESSION['final_order']);
echo json_encode($_SESSION['final_order']);
?> 
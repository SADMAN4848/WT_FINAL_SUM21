<?php 
	include 'controllers/CustomerController.php';
	$c_uname = $_GET["c_uname"];
	$user = AjaxUsernameSearch($c_uname);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>
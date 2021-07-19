<?php
	include 'models/db_config.php';
	
	$a_uname="";
	$err_a_uname="";
	$a_pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	
	if(isset($_POST["btn_login"])){
		
		if(empty($_POST["a_uname"])){
			$hasError  = true;
			$err_a_uname = "Username Required";
		}
		else{
			$a_uname = $_POST["a_uname"];
		}
		if(empty($_POST["a_pass"])){
			$hasError  = true;
			$err_a_pass = "Password Required";
		}
		else{
			$a_pass = $_POST["a_pass"];
		}
		
		if(!$hasError){
			if(authenticateAdmin($a_uname,$a_pass)){
				header("Location: dashboard.php");
			}
			$err_db  = "Username and password invalid";
		}
		
	}
	
	function authenticateAdmin($a_uname,$a_pass){
		$query = "select * from admin where a_uname='$a_uname' and a_pass='$a_pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
?>
<?php
	
	if(empty($_POST["c_name"])){
			$hasError  = true;
			$err_c_name = "Username Required";
		}
		else{
			$c_name = $_POST["c_name"];
		}
		if(empty($_POST["c_uname"])){
			$hasError  = true;
			$err_c_uname = "*Username Required";
		}
		else{
			$c_uname = $_POST["c_uname"];
		}
		if(empty($_POST["c_pass"])){
			$hasError  = true;
			$err_c_pass = "*Password Required";
		}
		else if(strlen($_POST["c_pass"])<5){
			$hasError=true;
			$err_c_pass="*Password length must be greater than 5";
		}
		else{
			$c_pass = $_POST["c_pass"];
		}
		if(empty($_POST["c_dob_day"])){
			$hasError  = true;
			$err_c_dob_day = "*Day Required";
		}
		else{
			$c_dob_day = $_POST["c_dob_day"];
		}
		if(empty($_POST["c_dob_month"])){
			$hasError  = true;
			$err_c_dob_month = "*Month Required";
		}
		else{
			$c_dob_month = $_POST["c_dob_month"];
		}
		if(empty($_POST["c_dob_year"])){
			$hasError  = true;
			$err_c_dob_year = "*Year Required";
		}
		else{
			$c_dob_year = $_POST["c_dob_year"];
		}
		if(!isset($_POST["c_gender"])){
			$hasError  = true;
			$err_c_gender = "*Gender Required";
		}
		else{
			$c_gender = $_POST["c_gender"];
		}
		if(empty($_POST["c_email"])){
			$hasError  = true;
			$err_c_email = "*Email Required";
		}
		else{
			$c_email = $_POST["c_email"];
		}
		if(empty($_POST["c_address"])){
			$hasError  = true;
			$err_c_address = "*Address Required";
		}
		else{
			$c_address = $_POST["c_address"];
		}
		if(empty($_POST["c_phone"])){
			$hasError  = true;
			$err_c_phone = "*Phone no Required";
		}
		else{
			$c_phone = $_POST["c_phone"];
		}
		if(empty($_POST["c_nid"])){
			$hasError  = true;
			$err_c_nid = "*NID Required";
		}
		else{
			$c_nid = $_POST["c_nid"];
		}
?>		
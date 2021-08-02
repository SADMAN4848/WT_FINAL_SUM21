<?php
if(empty($_POST["p_location"])){
			$hasError  = true;
			$err_p_location = "*Location Required";
		}
		else{
			$p_location = $_POST["p_location"];
		}
		if(!isset($_POST["p_type"]))
		{
		$hasError=true;   
		$err_p_type="*Property type required"; 
		}
		else{
			$p_type = $_POST["p_type"];
		}
		
		if(!isset($_POST["p_category"]))
		{
		$hasError=true;   
		$err_p_category="*Property category required"; 
		}
		else{
			$p_category = $_POST["p_category"];
		}
?>
<?php 
if(empty($_POST["f_details"])){
			$hasError  = true;
			$err_f_details = "*FAQ Details Required";
		}
		else{
			$f_details = $_POST["f_details"];
		}
		?>
<?php if(empty($_POST["c_uname"])){
			$hasError  = true;
			$err_c_uname = "*Username Required";
		}
		else{
			$c_uname = $_POST["c_uname"]; 
		}
		if(empty($_POST["r_details"])){   
			$hasError  = true;
			$err_r_details = "*Review Details Required";
		}
		else{
			$r_details = $_POST["r_details"];
		}
		if(empty($_POST["r_rating"])){   
			$hasError  = true;
			$err_r_rating = "*Rating Required";
		}
		else{
			$r_rating = $_POST["r_rating"];
		}
		$h_id=$_POST["h_id"];
		?>
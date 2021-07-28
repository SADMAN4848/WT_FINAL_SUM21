<?php
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
		else{
			$c_pass = $_POST["c_pass"];
		}
		?>
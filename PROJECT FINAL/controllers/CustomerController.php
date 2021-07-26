<?php
	require_once 'models/db_config.php';
	$c_uname="";
	$err_c_uname="";
	$c_pass="";
	$err_c_pass="";
	$err_db="";
	$hasError=false;
	$err_db="";
	
	if(isset($_POST["btn_login"])){
		
		if(empty($_POST["c_uname"])){
			$hasError  = true;
			$err_c_uname = "Username Required";
		}
		else{
			$c_uname = $_POST["c_uname"];
		}
		if(empty($_POST["c_pass"])){
			$hasError  = true;
			$err_c_pass = "Password Required";
		}
		else{
			$c_pass = $_POST["c_pass"];
		}
		
		if(!$hasError){
			
			if(authenticateCustomer($c_uname,$c_pass)){
				header("Location: searchProperty.php?c_uname=$c_uname");
			}
			$err_db  = "Username and password invalid";
		}
		
	}
	
	elseif(isset($_POST["add_customer"])){
		
		$rs = insertCustomer($_POST["c_name"],$_POST["c_uname"],$_POST["c_pass"],$_POST["c_dob_day"],$_POST["c_dob_month"],$_POST["c_dob_year"],$_POST["c_gender"],$_POST["c_email"],$_POST["c_address"],$_POST["c_phone"],$_POST["c_nid"]);
		if($rs === true){
			header("Location: loginCustomer.php");
		}
		echo $err_db = $rs;
	
	}
	
	elseif(isset($_POST["edit_student"])){
		
		$rs = updateStudent($_POST["s_name"],$_POST["s_id"],$_POST["s_dob"],$_POST["s_credit"],$_POST["s_cgpa"],$_POST["dept_id"]);
		if($rs === true){
			header("Location: allstudents.php");
		}
		echo $err_db = $rs;
	
	}
	
	elseif(isset($_POST["add_review"])){
		 
		$rs = rateHouseholder($_POST["c_uname"],$_POST["r_details"],$_POST["r_rating"],$_POST["h_id"]);
		if($rs === true){
			header("Location: ReviewDone.php");
		}
		echo $err_db = $rs;
	
	}
	
	elseif(isset($_POST["confirm_booking"])){
		
		$rs = bookproperty($_POST["c_uname"],$_POST["c_pass"],$_POST["p_id"]);
		if($rs === true){
			header("Location: BookingDone.php");
		}
		echo $err_db = $rs;
	
	}
	
	elseif(isset($_POST["update_customer"])){
		
		$rs = updateCustomer($_POST["c_id"],$_POST["c_name"],$_POST["c_uname"],$_POST["c_pass"],$_POST["c_dob_day"],$_POST["c_dob_month"],$_POST["c_dob_year"],$_POST["c_gender"],$_POST["c_email"],$_POST["c_address"],$_POST["c_phone"],$_POST["c_nid"]);
		if($rs === true){
			header("Location: searchPropertyWithoutLink.php");
		}
		echo $err_db = $rs;
	
	}
	
	elseif(isset($_POST["send_faq"])){
		
		$rs = submitFaq($_POST["f_details"],$_POST["c_id"]);
		if($rs === true){
			header("Location: FaqSubmitted.php");
		}
		echo $err_db = $rs;
	
	}
	
	function insertCustomer($c_name,$c_uname,$u_pass,$c_dob_day,$c_dob_month,$c_dob_year,$c_gender,$c_email,$c_address,$c_phone,$c_nid){
		$query="insert into customer values (NULL,'$c_name','$c_uname','$u_pass','$c_dob_day','$c_dob_month','$c_dob_year','$c_gender','$c_email','$c_address','$c_phone','$c_nid')";
		
		return execute($query);
		
	}
	
	function getCustomer($c_id){
		$query="select * from customer where c_id='$c_id'";
		$rs = get($query);
		return $rs[0];
	}
	
	function getCustomerWithUsername($c_uname){

		$query="select * from customer where c_uname='$c_uname'";
		$rs = get($query);
		return $rs[0];
	}
	
	function getCustomers(){
		$query= "select customer.*, department.dept_name from student left join department on student.dept_id=department.dept_id";
		$rs = get($query);
		return $rs;
	}
	function updateCustomer($c_id,$c_name,$c_uname,$c_pass,$c_dob_day,$c_dob_month,$c_dob_year,$c_gender,$c_email,$c_address,$c_phone,$c_nid){
		$query="update customer set c_uname='$c_uname',c_pass='$c_pass',c_dob_day='$c_dob_day',c_dob_month='$c_dob_month',c_dob_year='$c_dob_year',c_gender='$c_gender',c_email='$c_email',c_address='$c_address',c_phone='$c_phone',c_nid='$c_nid' where c_id='$c_id'";
		return execute($query);
	}
	function authenticateCustomer($c_uname,$c_pass){
		$query = "select * from customer where c_uname='$c_uname' and c_pass='$c_pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}	
	function rateHouseholder($c_uname,$r_details,$r_rating,$h_id){
		
		$query="insert into review values (NULL,'$r_details','$r_rating','$c_uname','$h_id')";
		return execute($query);
	}

	function getPropery($p_id){
		$query="select * from properties where p_id='$p_id'";
		$rs = get($query);
		return $rs[0];
	}
	
	function bookproperty($c_uname,$c_pass, $p_id){
		$query="UPDATE properties, customer SET properties.c_uname = '$c_uname' WHERE customer.c_uname = '$c_uname' and c_pass='$c_pass' and properties.p_id='$p_id';";
		return execute($query);
	}
	
	function submitFaq($f_details,$c_id){
		$query="insert into faq values (NULL,'$f_details',NULL,'$c_id')";
		return execute($query);
	}
	
	function getFaqReply($c_id){
		$query="select * from faq where c_id='$c_id'";
		$rs = get($query);
		return $rs;
	}
?> 
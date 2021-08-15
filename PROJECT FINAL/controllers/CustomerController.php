<?php
	session_start();
	require_once 'models/db_config.php';
	$c_name="";
	$err_c_name="";
	$c_uname="";
	$err_c_uname="";
	$c_pass="";
	$err_c_pass="";
	$c_dob_day="";
	$err_c_dob_day="";
	$c_dob_month="";
	$err_c_dob_month="";
	$c_dob_year="";
	$err_c_dob_year="";
	$c_gender="";
	$err_c_gender="";
	$c_email="";
	$err_c_email="";
	$c_address="";
	$err_c_address="";
	$c_phone="";
	$err_c_phone="";
	$c_nid="";
	$err_c_nid="";
	$r_details="";
	$err_r_details="";
	$r_rating="";
	$err_r_rating="";
	$f_details="";
	$err_f_details="";
	$h_id="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["btn_login"])){
		require 'validations/login_customer_validation.php'; 
		
		if(!$hasError){
			
			if(authenticateCustomer($c_uname,$c_pass)){
				$_SESSION["loggedCustomer"] =$c_uname;
				header("Location: searchProperty.php");
			}
			$err_db  = "*Username and password invalid";
		}
		
	}
	
	elseif(isset($_POST["add_customer"])){
		require 'validations/add_customer_validation.php'; 
		
		if(!$hasError){
		$rs = insertCustomer($c_name,$c_uname,$c_pass,$c_dob_day,$c_dob_month,$c_dob_year,$c_gender,$c_email,$c_address,$c_phone,$c_nid);
		if($rs === true){
			header("Location: loginCustomer.php");
		}
		echo $err_db = $rs;
		}
	}
	
	
	elseif(isset($_POST["add_review"])){
		require 'validations/review_validation.php'; 
		
		if(!$hasError){
		$rs = rateHouseholder($c_uname,$r_details,$r_rating,$h_id);
		if($rs === true){
			header("Location: ReviewDone.php");
		}
		echo $err_db = $rs;
		}
	}
	
	elseif(isset($_POST["confirm_booking"])){
		require 'validations/login_customer_validation.php';
		
		if(!$hasError){
		$rs = bookproperty($c_uname,$c_pass,$_POST["p_id"]);
		if($rs === true){
			header("Location: BookingDone.php");
		}
		echo $err_db = $rs;
		}
	}
	
	elseif(isset($_POST["update_customer"])){
		require 'validations/update_customer_validation.php';
		if(!$hasError){
		$rs = updateCustomer($c_id,$c_name,$c_uname,$c_pass,$c_dob_day,$c_dob_month,$c_dob_year,$c_gender,$c_email,$c_address,$c_phone,$c_nid);
		if($rs === true){
			header("Location: ProfileUpdated.php");
		}
		echo $err_db = $rs;
		}
	}
	
	elseif(isset($_POST["send_faq"])){
		require 'validations/faq_validation.php'; 
		
		if(!$hasError){
		$rs = submitFaq($f_details,$_POST["c_id"]);
		if($rs === true){
			header("Location: FaqSubmitted.php");
		}
		echo $err_db = $rs;
		}
	}
	
	elseif(isset($_POST["cancel_booking"])){
		
		
		
		$rs = cancelBooking($_POST["p_id"]);
		if($rs === true){
			header("Location: bookingHistory.php");
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
	function AjaxUsernameSearch($c_uname){
		$query = "select c_uname from customer where c_uname='$c_uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	
	
	function cancelBooking($p_id){
		$query="UPDATE properties set c_uname=NULL where p_id='$p_id'";
		return execute($query);
	}
?> 

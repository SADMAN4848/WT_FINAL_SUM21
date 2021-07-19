<?php
	require_once 'models/db_config.php';
	
	$err_db="";
	if(isset($_POST["add_student"])){
		$rs = insertProduct($_POST["s_name"],$_POST["s_id"],$_POST["s_dob_date"],$_POST["s_dob_month"],$_POST["s_dob_year"],$_POST["s_credit"],$_POST["s_cgpa"],$_POST["dept_id"]);
		if($rs === true){
			header("Location: allproducts.php");
		}
		$err_db = $rs;
	
	}
	
	function insertStudent($s_name,$s_id,$s_dob_date,$s_dob_month,$s_dob_year, $s_credit,$s_cgpa,$dept_id){
		$query="insert into student values ($s_name,$s_id,$s_dob_date,$s_dob_month,$s_dob_year, $s_credit,$s_cgpa,$dept_id)";
		return execute($query);
	}
	
	function getStudent($s_id){
		$query="select * from student where s_id=$s_id";
		$rs = get($query);
		return $rs[0];
	}
	function updateStudent($s_name,$s_id,$s_dob_date,$s_dob_month,$s_dob_year, $s_credit,$s_cgpa,$dept_id){
		$query="update student set s_name='$s_name',s_id=$s_id,$s_dob_date=s_dob_date,$s_dob_month=s_dob_month,$s_dob_year=s_dob_year,s_credit=$s_credit,s_cgpa=$s_cgpa,dept_id=$dept_id where s_id=$s_id";
		return execute($query);
		
	}
?> 
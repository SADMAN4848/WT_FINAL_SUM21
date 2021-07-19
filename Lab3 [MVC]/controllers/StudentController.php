<?php
	require_once 'models/db_config.php';
	
	$err_db="";
	if(isset($_POST["add_student"])){
		echo "submiited";
		$rs = insertStudent($_POST["s_name"],$_POST["s_id"],$_POST["s_dob"],$_POST["s_credit"],$_POST["s_cgpa"],$_POST["dept_id"]);
		if($rs === true){
			header("Location: allstudents.php");
		}
		echo $err_db = $rs;
	
	}
	
	elseif(isset($_POST["edit_student"])){
		echo "submiited";
		$rs = updateStudent($_POST["s_name"],$_POST["s_id"],$_POST["s_dob"],$_POST["s_credit"],$_POST["s_cgpa"],$_POST["dept_id"]);
		if($rs === true){
			header("Location: allstudents.php");
		}
		echo $err_db = $rs;
	
	}
	
	function insertStudent($s_name,$s_id,$s_dob, $s_credit,$s_cgpa,$dept_id){
		$query="insert into student values ('$s_name','$s_id','$s_dob','$s_credit','$s_cgpa','$dept_id')";
		
		return execute($query);
		
	}
	
	function getStudent($s_id){
		$query="select * from student where s_id='$s_id'";
		$rs = get($query);
		return $rs[0];
	}
	function getStudents(){
		$query= "select student.*, department.dept_name from student left join department on student.dept_id=department.dept_id";
		$rs = get($query);
		return $rs;
	}
	function updateStudent($s_name,$s_id,$s_dob, $s_credit,$s_cgpa,$dept_id){
		$query="update student set s_name='$s_name',s_id='$s_id',s_dob='$s_dob',s_credit='$s_credit',s_cgpa='$s_cgpa',dept_id='$dept_id' where s_id='$s_id'";
		return execute($query);
		echo "update 2";
		
		
	}
?> 
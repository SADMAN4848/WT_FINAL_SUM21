<?php
	require_once 'models/db_config.php';
	$err_db="";
	
	function getAllDept(){
		$query = "select * from department";
		$rs = get($query);
		return $rs;
	}
	

?>
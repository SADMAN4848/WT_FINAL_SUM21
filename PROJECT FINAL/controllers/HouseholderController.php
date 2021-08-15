<?php
	require_once 'models/db_config.php';
	function getHouseholder($h_id){
		$query = "select * from householder where h_id='$h_id'";
		$rs = get($query);
		return $rs[0];
		
	}
?>
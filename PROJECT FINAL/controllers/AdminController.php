<?php
require_once 'models/db_config.php';


	function getNotices(){
		$query= "select* from admin";
		
		$rs = get($query);
		return $rs;
	}
?>
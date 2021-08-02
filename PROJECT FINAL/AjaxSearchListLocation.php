<?php 
	require_once 'controllers/PropertiesController.php';
	$key = $_GET["key"];
	$locations = AjaxSearch($key);
	if(count($locations)>0){
		foreach ($locations as $p){
			echo "<p>".$p["p_location"]."</p>";
		}
	}
	
?>
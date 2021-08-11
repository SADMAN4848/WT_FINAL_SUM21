<?php 
	require_once 'controllers/PropertiesController.php';
	$key = $_GET["key"];
	$locations = AjaxSearchEverything($key);
	if(count($locations)>0){
		foreach ($locations as $p){
			echo "<a href='propertyDetails.php?p_id=".$p["p_id"]."'>".$p["p_description"]."</a><br>";
		}
	}
	
?>
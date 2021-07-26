<?php 
	require_once 'models/db_config.php';
	
$p_id="";	
$p_type="";	
$p_location="";
$p_type="";

	if(isset($_POST["btn_search"])){
		
		if(searchProperties($_POST["p_location"],$_POST["p_type"],$_POST["p_category"])){
		$p_location=$_POST["p_location"];
		$p_type=$_POST["p_type"];
		$p_category=$_POST["p_category"];	
			header("Location: searchResultProperty.php?p_location=$p_location&p_type=$p_type&p_category=$p_category");
		}
		else
		echo "No match found";
		
	
	}
	
	function searchProperties($p_location,$p_type){
		$query= "select* from properties where p_location='$p_location'and p_type='$p_type'";
		$rs = get($query);
		return $rs[0];
	}
	
	function searchPropertiesList($p_location,$p_type,$p_category){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id where p_location='$p_location'and p_type='$p_type' and p_type='$p_type'";
		
		$rs = get($query);
		return $rs; 
	}
	
	
	function getProperties(){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id";
		
		$rs = get($query);
		return $rs;
	}
	
	function getPropertyDetails($p_id){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id where p_id='$p_id'";
		
		$rs = get($query);
		return $rs;
	}
	
	function getCustomerWithUsername($c_uname){

		$query="select * from customer where c_uname='$c_uname'";
		$rs = get($query);
		return $rs[0];
	}
?>
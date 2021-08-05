<?php include 'headers/admin_header.php';
	require_once 'controllers/CustomerController.php';
	require_once 'controllers/HouseholderController.php';
	
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$c_uname=$_SESSION["loggedCustomer"];
	$p_id=$_GET["p_id"];
	
	
	
?>

<div class="center">
	<img src="images/rate.png" align="center">
	<h1 class="textBlue">Are you sure you want to cancel you booking? 
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="">
		<div class="form-group">
			
			<input type="hidden" name="p_id" value="<?php echo $p_id ?>"class="form-control"><span style="color:red">
		</div>
		
		<br>
		<div>
			
			<input type="submit" name="cancel_booking" class="btn-red" value="Proceed Cancelling" class="form-control">&nbsp;&nbsp;&nbsp;
			<a href="bookingHistory.php" class="btn-green">No, Return back </a>
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
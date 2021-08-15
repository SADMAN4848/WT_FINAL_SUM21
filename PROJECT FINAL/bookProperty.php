<?php include 'headers/admin_header.php';
	require_once 'controllers/CustomerController.php';
	
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$p_id=$_GET["p_id"];
	$pr=getPropery($p_id);
	
?>

<div class="center">
	<img src="images/bookingpage.png" align="center">
	<h2 class="textBlue">Confirm Booking? Varify your identity to continue.</h2>
	<h5 class="text"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="">
			<h4 class="textNewBlue">Enter Your Username:</h4> 
			<input type="text" name="c_uname" class=""><span style="color:red"><?php echo $err_c_uname; ?></span>
		</div>
		<div class="">
			<h4 class="textNewBlue">Enter Your Password:</h4> 
			<input type="password" name="c_pass" class=""><span style="color:red"><?php echo $err_c_pass; ?></span>
		</div>
		<div>
		<input type="hidden" name="p_id" class="form-control" value="<?php echo $pr["p_id"];?>" >      
		</div>
		<br>
		<div class="form-group text-center">
			
			<input type="submit" name="confirm_booking" class="btn-success" value="Book" >
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
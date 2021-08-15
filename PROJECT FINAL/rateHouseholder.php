<?php include 'headers/admin_header.php';
	require_once 'controllers/CustomerController.php';
	require_once 'controllers/HouseholderController.php';
	
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$c_uname=$_SESSION["loggedCustomer"];
	$h_id=$_GET["h_id"];
	$pr=getHouseholder($h_id);
	
	
?>

<div class="center">
	<img src="images/rate.png" align="center">
	<h1 class="textBlue">Rate <?php echo $pr["h_name"];?>!</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="">
		<div class="form-group">
			
			<input type="hidden" name="c_uname" value="<?php echo $c_uname?>"class="form-control"><span style="color:red">
		</div>
		
		<div class="form-group">
			<h4 class="textNewBlue">Review Details:</h4> 
			<textarea id="r_details"  name="r_details" class="form-control"></textarea><span style="color:red"><?php echo $err_r_details; ?></span>
		</div>
		<div class="form-group">
			<h4 class="textNewBlue">Rate Householder:</h4> 
								<select name="r_rating" >
								<option selected disabled>Rate</option>
								<?php
									for($i=1;$i<=10;$i++){
										echo "<option>$i</option>";	
									}
								?>
								</select><span style="color:red"><?php echo $err_r_rating; ?></span>
		</div>
		
		<div>
		<input type="hidden" name="h_id" class="form-control" value="<?php echo $h_id;?>" >      
		</div>
		<br>
		<div>
			
			<input type="submit" name="add_review" class="btn btn-success" value="Submit Review" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
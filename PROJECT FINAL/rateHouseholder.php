<?php include 'headers/admin_header_withoutlink.php';
	require_once 'controllers/CustomerController.php';
	require_once 'controllers/HouseholderController.php';
	$h_id=$_GET["h_id"];
	$pr=getHouseholder($h_id);
	
?>

<div class="center">
	<h1 class="text">Rate <?php echo $pr["h_name"];?>!</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="">
		<div class="form-group">
			<h4 class="text">Enter Your Username:</h4> 
			<input type="text" name="c_uname" class="form-control"><span style="color:red"><?php echo $err_c_uname; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Review Details:</h4> 
			<input type="text" name="r_details" class="form-control"><span style="color:red"><?php echo $err_r_details; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Rate Householder:</h4> 
			<input type="text" name="r_rating" class="form-control"><span style="color:red"><?php echo $err_r_rating; ?></span>
		</div>
		
		<div>
		<input type="hidden" name="h_id" class="form-control" value="<?php echo $pr["h_id"];?>" >      
		</div>
		<br>
		<div>
			
			<input type="submit" name="add_review" class="btn btn-success" value="Submit Review" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
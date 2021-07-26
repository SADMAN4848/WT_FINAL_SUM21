<?php include 'main_header.php';
	require_once 'controllers/CustomerController.php';
	
	
?>

<div class="center">
<h1 class="text">Customer Registration</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="c_name" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">Username:</h4> 
			<input type="text" name="c_uname" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Password:</h4> 
			<input type="password" name="c_pass" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">Date of Birth:</h4> 
			<select name="c_dob_day" >
								<option>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
								</select>
							<!-- <span style="color:red"><php echo $err_day; ?></span> -->
							<select name="c_dob_month">
								<option>Month</option>
								
								<?php
								$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
								foreach($months as $m){
									if($m == $month)
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
							</select>
							<!--<span style="color:red"><php echo $err_month; ?></span> -->
							
                            <select name="c_dob_year">
								<option>Year</option>
								
								<?php
									for($i=1990;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
		</div>
		<div class="form-group">
			<h4 class="text">Gender:</h4> 
			<input type="radio" value="Male" name="c_gender">Male<input type="radio" value="Female" name="c_gender">Female
		</div>
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="text" name="c_email" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">Address:</h4> 
			<input type="text" name="c_address" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">Phone No:</h4> 
			<input type="text" name="c_phone" class="form-control">
		</div>
		
		<div class="form-group">
			<h4 class="text">NID No:</h4> 
			<input type="text" name="c_nid" class="form-control">
		</div>
		<br>
		<div class="form-group text-center">
			
			<input type="submit" name="add_customer" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>

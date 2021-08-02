<?php include 'headers/admin_header.php';
	require_once 'controllers/CustomerController.php';
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$c_uname=$_SESSION["loggedCustomer"];
	$pr= getCustomerWithUsername($c_uname);
	
?>

<script src ="javaScripts/username.js"></script>

<div class="center">
<h1 class="text">Update Your Profile</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="c_name" class="form-control" value ="<?php echo $pr["c_name"];?>"><span style="color:red"><?php echo $err_c_name; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Username:</h4> 
			<input type="text" name="c_uname" class="form-control" onfocusout="AjaxUsernameSearch(this)" value ="<?php echo $pr["c_uname"];?>"><span id="err_c_uname" style="color:red"><?php echo $err_c_uname; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password:</h4> 
			<input type="password" name="c_pass" class="form-control" value ="<?php echo $pr["c_pass"];?>"><span style="color:red"><?php echo $err_c_pass; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Date of Birth:</h4> 
			<select name="c_dob_day" >
								<option selected disabled>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
								</select><span style="color:red"><?php echo $err_c_dob_day; ?></span>
							
							<select name="c_dob_month">
								<option selected disabled>Month</option>
								
								<?php
								$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
								foreach($months as $m){
									if($m == $month)
										echo "<option selected>$m</option>";
									else
										echo "<option>$m</option>";
								}
							?>
							</select><span style="color:red"><?php echo $err_c_dob_month; ?></span>
							
							
                            <select name="c_dob_year">
								<option selected disabled>Year</option>
								
								<?php
									for($i=1990;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select><span style="color:red"><?php echo $err_c_dob_year; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Gender:</h4> 
			<input type="radio" value="Male" name="c_gender">Male<input type="radio" value="Female" name="c_gender">Female<span style="color:red"><?php echo $err_c_gender; ?></span>
			
		</div>
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input type="text" name="c_email" class="form-control" value ="<?php echo $pr["c_email"];?>"><span style="color:red"><?php echo $err_c_email; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Address:</h4> 
			<textarea id="c_address" name="c_address" class="form-control" value ="<?php echo $pr["c_address"];?>"></textarea><span style="color:red"><?php echo $err_c_address; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Phone No:</h4> 
			<input type="text" name="c_phone" class="form-control" value ="<?php echo $pr["c_phone"];?>"><span style="color:red"><?php echo $err_c_phone; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">NID No:</h4> 
			<input type="text" name="c_nid" class="form-control" value ="<?php echo $pr["c_nid"];?>"><span style="color:red"><?php echo $err_c_nid; ?></span>
		</div>
		<div class="form-group">
			<input type="hidden" name="c_id" class="form-control" value ="<?php echo $pr["c_id"];?>">
		</div>
		<br>
		<div class="form-group text-center">
			
			<input type="submit" name="update_customer" class="btn-success" value="Update" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>

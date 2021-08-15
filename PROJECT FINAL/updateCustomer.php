<?php include 'headers/admin_header.php';
	require_once 'controllers/CustomerController.php';
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$c_uname=$_SESSION["loggedCustomer"];
	$pr= getCustomerWithUsername($c_uname);
	
?>

<script src ="javaScripts/username.js"></script>
<script src ="javaScripts/updateProfile.js"></script>


  
<div class="center">
<img src="images/signIn.png">
<h1 class="textBlue">Update Your Profile</h1>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post" class="" onsubmit="return validate()">
		<div class="form-group">
			<h4 class="textBlue">Name:</h4> 
			<input id="c_name" type="text" name="c_name" class="form-control" value ="<?php echo $pr["c_name"];?>"><span id="err_c_name" style="color:red"><?php echo $err_c_name; ?></span>
		</div>
		
		<div>
			<h4 class="textBlue">Username:</h4> 
			<input id="c_uname" type="text" name="c_uname" class="form-control" onfocusout="AjaxUsernameSearch(this)" value ="<?php echo $pr["c_uname"];?>"><span id="err_c_uname" id="err_c_uname" style="color:red"><?php echo $err_c_uname; ?></span>
		</div>
		<div>
			<h4 class="textBlue">Password:</h4> 
			<input id="c_pass" type="password" name="c_pass" class="form-control" value ="<?php echo $pr["c_pass"];?>"><span id="err_c_pass" style="color:red"><?php echo $err_c_pass; ?></span>
		</div>
		
		<div>
			<h4 class="textBlue">Date of Birth:</h4> 
							<select id="c_dob_day" name="c_dob_day" value="<?php echo $pr["c_dob_day"];?>">
								<option selected disabled>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option value='$i'"; if($pr["c_dob_day"]==$i){ echo "selected";}echo ">$i  </option>";

										}
								?>
								</select><span id="err_c_dob_day" style="color:red"><?php echo $err_c_dob_day; ?></span>
							
							<select name="c_dob_month">
								<option selected disabled>Month</option>
								
								<?php
								$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
								foreach($months as $m){
									echo "<option value='$m'"; if($pr["c_dob_month"]==$m){ echo "selected";}echo ">$m  </option>";
									}
								?>
							</select><span id="err_c_dob_month" style="color:red"><?php echo $err_c_dob_month; ?></span>
							
							
                            <select name="c_dob_year">
								<option selected disabled>Year</option>
								
								<?php
									for($i=1980;$i<=2021;$i++){
										echo "<option value='$i'"; if($pr["c_dob_year"]==$i){ echo "selected";}echo ">$i  </option>";

										}
								?>
							</select><span id="err_c_dob_year" style="color:red"><?php echo $err_c_dob_year; ?></span>
		</div>
		<div>
			<h4 class="textBlue">Gender:</h4> 
			<input id="c_gender" type="radio" value="Male" name="c_gender"
			<?php 
				if($pr["c_gender"] =="Male"){
					echo "checked";
				}?>>Male 
			<input type="radio" value="Female" name="c_gender"
			<?php 
				if($pr["c_gender"] =="Female"){
					echo "checked";
				}?>>Female<span id="err_c_gender" style="color:red"><?php echo $err_c_gender; ?></span>
		</div>
		
		<div>
			<h4 class="textBlue">Email:</h4> 
			<input id="c_email" type="text" name="c_email" class="form-control" value ="<?php echo $pr["c_email"];?>"><span id="err_c_email" style="color:red"><?php echo $err_c_email; ?></span>
		</div>
		
		<div>
			<h4 class="textBlue">Address:</h4> 
			<textarea id="c_address " name="c_address" class="form-control " rows="5" value ="<?php echo $pr["c_address"];?>"><?php echo $pr["c_address"];?></textarea><span id="err_c_address" style="color:red"><?php echo $err_c_address; ?></span>
		</div>
		
		<div>
			<h4 class="textBlue">Phone No:</h4> 
			<input id="c_phone" type="text" name="c_phone" class="form-control" value ="<?php echo $pr["c_phone"];?>"><span id="err_c_phone" style="color:red"><?php echo $err_c_phone; ?></span>
		</div>
		
		<div>
			<h4 class="textBlue">NID No:</h4> 
			<input id="c_nid" type="text" name="c_nid" class="form-control" value ="<?php echo $pr["c_nid"];?>"><span id="err_c_nid" style="color:red"><?php echo $err_c_nid; ?></span>
		</div>
		<div>
			<input type="hidden" name="c_id" class="form-control" value ="<?php echo $pr["c_id"];?>">
		</div>
		<br>
		<div>
			
			<input type="submit" name="update_customer" class="btn-success" value="Update" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>

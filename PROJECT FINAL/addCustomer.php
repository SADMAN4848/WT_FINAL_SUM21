<?php include 'headers/homepage_header.php';
	require_once 'controllers/CustomerController.php';
	
	
?>
<script src ="javaScripts/username.js"></script>
<script src ="javaScripts/addcustomer.js"></script>	
<body>
<div class="center">
<h1 class="textNewBlue">Customer Registration</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="" onsubmit="return validate()">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input id="c_name" type="text" name="c_name" class="form-control"><span id="err_c_name" style="color:red"><?php echo $err_c_name; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Username:</h4> 
			<input id="c_uname" type="text" name="c_uname" class="form-control" onfocusout="AjaxUsernameSearch(this)":><span id="err_c_uname" style="color:red"><?php echo $err_c_uname; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password:</h4> 
			<input id="c_pass" type="password" name="c_pass" class="form-control"><span id="err_c_pass" style="color:red"><?php echo $err_c_pass; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Date of Birth:</h4> 
							<select id="c_dob_day" name="c_dob_day" >
								<option selected disabled>Day</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
								</select><span id="err_c_dob_day"style="color:red"><?php echo $err_c_dob_day; ?></span>
							
							<select id="c_dob_month" name="c_dob_month">
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
							</select><span id="err_c_dob_month" style="color:red"><?php echo $err_c_dob_month; ?></span>
							
							
                            <select id="c_dob_year" name="c_dob_year">
								<option selected disabled>Year</option>
								
								<?php
									for($i=1990;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select><span id="err_c_dob_year" style="color:red"><?php echo $err_c_dob_year; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Gender:</h4> 
			<input id="male" type="radio" value="Male" name="c_gender">Male<input id="female"type="radio" value="Female" name="c_gender">Female<span  id="err_c_gender" style="color:red"><?php echo $err_c_gender; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email:</h4> 
			<input id="c_email" type="text" name="c_email" class="form-control"><span id="err_c_email" style="color:red"><?php echo $err_c_email; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Address:</h4> 
			<textarea id="c_address" type="text" name="c_address" class="form-control"></textarea><span id="err_c_address" style="color:red"><?php echo $err_c_address; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Phone No:</h4> 
			<input id="c_phone" type="text" name="c_phone" class="form-control"><span id="err_c_phone" style="color:red"><?php echo $err_c_phone; ?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">NID No:</h4> 
			<input id="c_nid" type="text" name="c_nid" class="form-control"><span id="err_c_nid" style="color:red"><?php echo $err_c_nid; ?></span>
		</div>
		<br>
		<div class="form-group text-center">
			
			<input type="submit" name="add_customer" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
	</form>
</div>
</body>

<?php include 'admin_footer.php';?>

<?php include 'headers/homepage_header.php';
	require_once 'controllers/CustomerController.php';
	
	
?>
<script src ="javaScripts/username.js"></script>
	<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		
		function validate(){
			refresh();
			if(get("c_name").value == ""){
				hasError = true;
				get("err_c_name").innerHTML = "*Name required js";
			}
			if(get("c_uname").value == ""){
				hasError = true;
				get("err_c_uname").innerHTML = "*Username required";
			}
			if(get("c_pass").value == ""){
				hasError = true;
				get("err_c_pass").innerHTML = "*Password required";
			}
			else if(get("c_pass").value.length <=5){
				hasError = true;
				get("err_c_pass").innerHTML = "*Password length must be at least 5";
			}
			if(get("c_dob_day").selectedIndex == 0){
				hasError = true;
				get("err_c_dob_day").innerHTML = "*Day required";
			}
			if(get("c_dob_month").selectedIndex == 0){
				hasError = true;
				get("err_c_dob_month").innerHTML = "*Month required";
			}
			if(get("c_dob_year").selectedIndex == 0){
				hasError = true;
				get("err_c_dob_year").innerHTML = "*Year required";
			}
			if(!get("male").checked && !get("female").checked){
				hasError = true;
				get("err_c_gender").innerHTML = "*Gender required";
			}
			if(get("c_email").value == ""){
				hasError = true;
				get("err_c_email").innerHTML = "*Email required";
			}
			if(get("c_address").value == ""){
				hasError = true;
				get("err_c_address").innerHTML = "*Address required";
			}
			
			if(get("c_phone").value==""){
				hasError = true;
				get("err_c_phone").innerHTML = "*Phone required";
			}
			if(get("c_nid").value==""){
				hasError = true;
				get("err_c_nid").innerHTML = "*NID no required";
			}
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_c_name").innerHTML ="";
			get("err_c_uname").innerHTML ="";
			get("err_c_pass").innerHTML ="";
			get("err_c_dob_day").innerHTML="";
			get("err_c_dob_month").innerHTML = "";
			get("err_c_dob_year").innerHTML = "";
			get("err_c_gender").innerHTML = "";
			get("err_c_email").innerHTML = "";
			get("err_c_address").innerHTML = "";
			get("err_c_phone").innerHTML = "";
			get("err_c_nid").innerHTML = "";
		}
	</script>
<body>
<div class="center">
<h1 class="text">Customer Registration</h1>
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
								</select><span id="err_c_dob_day" style="color:red"><?php echo $err_c_dob_day; ?></span>
							
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
			<input id="male" type="radio" value="Male" name="c_gender">Male<input id="female"type="radio" value="Female" name="c_gender">Female<span  id="err_gender" style="color:red"><?php echo $err_c_gender; ?></span>
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

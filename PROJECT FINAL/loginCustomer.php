<?php include 'headers/homepage_header.php';
	include 'controllers/CustomerController.php';
	
?>

<div class="center-login">

	<h1 class="textBlue">Customer Login</h1>
	
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="textNewBlue">Username</h4> 
			<input type="text" name="c_uname" value="<?php echo $c_uname;?>" class="form-control">
			<span class="text-danger"><span style="color:red"><?php echo $err_c_uname; ?></span>
		</div>
		<div class="form-group">
			<h4 class="textNewBlue">Password</h4> 
			<input type="password" name="c_pass" value="<?php echo $c_pass;?>" class="form-control">
			<span class="text-danger"><span style="color:red"><?php echo $err_c_pass; ?></span>
		</div>
		<br>
		<div class="form-group text-center">
			
			<input type="submit" name="btn_login" class="btn-success" value="Login" class="form-control">
		</div>
		<br>
		<div class="form-group text-center">
			
			<a href="addCustomer.php" >New here? Sign Up</a>
		</div>
	</form>
</div>


<?php include 'main_footer.php';?>
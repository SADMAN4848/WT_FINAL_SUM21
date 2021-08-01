<?php include 'headers/admin_header.php';
if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
?>

<div class="center">
  <center> <img src="images/booked.png"></center>
  </div>
<?php include 'admin_footer.php';?>
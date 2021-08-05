<?php include 'headers/admin_header.php';
	require_once 'controllers/PropertiesController.php';
	session_start();
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$c_uname = $_SESSION["loggedCustomer"];
	
?>

<div class="center">
	<h1 class="textNewBlue">Current Bookings</h1>
	<table class="table">
		<thead>
			<th> Booking No</th>
			<th> Photo</th>
			<th> Type</th>
			<th> Category</th>
			<th> Area</th>
			<th> Location </th>
			<th> Price</th>
			<th> Owner Name</th>
			<th> Status</th>
			
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$booking = bookingHistory($c_uname);
				$i=1;
				foreach($booking as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img width='180px' height='100px' src='".$p["p_photo"]."'</td>";
						echo "<td>".$p["p_type"]."</td>";
						echo "<td>".$p["p_category"]."</td>";
						echo "<td>".$p["p_area"]."</td>";
						echo "<td>".$p["p_location"]."</td>";
						echo "<td>".$p["p_price"]."</td>";
						echo "<td>".$p["h_name"]."</td>";
						echo "<td>"; echo"ACTIVE";echo"</td>";
						echo '<td><a href="propertyDetails.php?p_id='.$p["p_id"].'" class="btn-success">Details</a></td>';
						echo '<td><a href="confirmCancelBooking.php?p_id='.$p["p_id"].'" class="btn-red">Cancel</a></td>';
						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>



<?php include 'admin_footer.php';?>
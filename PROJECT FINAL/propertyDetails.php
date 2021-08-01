<?php include 'headers/admin_header.php';
	require_once 'controllers/PropertiesController.php';
	session_start();
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$p_id = $_GET["p_id"];
?>

<div class="center">
	<center><h3 class="text">Property Details</h3>
			
		</thead>
		<center><tbody>
			<?php
				$properties = getPropertyDetails($p_id);
			
				foreach($properties as $p){
					
						echo "<img src='".$p["p_photo"]."'";
						echo"<br><br><br><br>";
						echo "Property Type: "; echo $p["p_type"]; echo"<br>";
						echo "Area: ";echo $p["p_area"];echo"<br>";
						echo "Location: ";echo $p["p_location"];echo"<br>";
						echo "Price: ";echo $p["p_price"];echo"<br>";
						echo "Description: ";echo $p["p_description"];echo"<br>";
						echo "Property Owner: ";echo $p["h_name"];echo"<br>";
						echo "<br>";
						echo '<tr><a href="bookProperty.php?p_id='.$p["p_id"].'" class="btn-success">Request Booking</a></tr>';
						echo "   ";
						echo '<tr><a href="rateHouseholder.php?h_id='.$p["h_id"].'" class="btn-success">Rate Owner</a></tr>';
					
				}
			?>
			
		</tbody></center>
	</table>
</div>
<?php include 'admin_footer.php';?>
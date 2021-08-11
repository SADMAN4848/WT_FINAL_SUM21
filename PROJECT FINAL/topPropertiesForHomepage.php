<?php 
	
	include 'headers/homepage_header.php';
	require_once 'controllers/PropertiesController.php'; 
	
?>

<div class="center">
	<h1 class="textNewBlue">Top charts</h1>
	<table class="table table-stripped">
		<thead>
			<th> #No</th>
			<th> Photo</th>
			<th> Type</th>
			<th> Category</th>
			<th> Area</th>
			<th> Location </th>
			<th> Price</th>
			<th> Owner Name</th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$properties = getProperties();
				$i=1;
				foreach($properties as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img width='180px' height='100px' src='".$p["p_photo"]."'</td>";
						echo "<td>".$p["p_type"]."</td>";
						echo "<td>".$p["p_category"]."</td>";
						echo "<td>".$p["p_area"]."</td>";
						echo "<td>".$p["p_location"]."</td>";
						echo "<td>".$p["p_price"]."</td>";
						echo "<td>".$p["h_name"]."</td><br>";
						
						echo '<td><a href="propertyDetails.php?p_id='.$p["p_id"].'" class="btn-success">Details</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>




<?php include 'admin_footer.php';?>
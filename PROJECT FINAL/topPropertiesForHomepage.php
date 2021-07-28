<?php 
	
	include 'headers/admin_header_withoutlink.php';
	require_once 'controllers/PropertiesController.php'; 
	
?>

<div class="center">
	<h1 class="text">Property List</h1>
	<table class="table table-stripped">
		<thead>
			<th> #No</th>
			<th> Type</th>
			<th> Category</th>
			<th> Area</th>
			<th> Location </th>
			<th> Price</th>
			<th> Photo</th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$properties = getProperties();
				$i=1;
				foreach($properties as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$p["p_type"]."</td>";
						echo "<td>".$p["p_category"]."</td>";
						echo "<td>".$p["p_area"]."</td>";
						echo "<td>".$p["p_location"]."</td>";
						echo "<td>".$p["p_price"]."</td>";
						echo "<td>".$p["p_photo"]."</td>";
						
						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>




<?php include 'admin_footer.php';?>
<?php include 'headers/admin_header_withoutlink.php';
	require_once 'controllers/PropertiesController.php';
	$p_location = $_GET["p_location"];
	$p_type = $_GET["p_type"];
	$p_category = $_GET["p_category"];
?>

<div class="center">
	<h3 class="text">Search Results</h3>
	<table class="table table-striped">
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
				$properties = searchPropertiesList($p_location,$p_type,$p_category);
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
						echo "<td>".$p["h_name"]."</td>";
						echo '<td><a href="propertyDetails.php?p_id='.$p["p_id"].'" class="btn-success">Details</a></td>';
						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<div class="center">
	<h2 class="text">Top charts</h2>
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
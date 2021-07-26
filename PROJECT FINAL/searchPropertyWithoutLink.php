<?php 
	
	include 'admin_header_withoutlink.php';
	require_once 'controllers/PropertiesController.php';
?>

<div class="center">
	<form action="" method="post">
		<div class="form-group">
			<h3 class="text">Search Property</h3>
			<input type="text" placeholder="Location" name="p_location"  class="form-control">
			
			<select name="p_type">
			<option>Select type</option>
								
			<?php
			$all_types = array('Flat','House','Plot');
			foreach($all_types as $m){
			if($m == $p_type)
				echo "<option selected>$m</option>";
			else
				echo "<option>$m</option>";
								}
			?>
			</select>
		
			
			<input type="submit" name="btn_search" class="btn-search" value="Search" >
		</div>
		
	</form>
</div>

<div class="center">
	<h1 class="text">Top charts</h1>
	<table class="table table-stripped">
		<thead>
			<th> #No</th>
			<th> Type</th>
			<th> Category</th>
			<th> Area</th>
			<th> Location </th>
			<th> Price</th>
			<th> Photo</th>
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
						echo "<td>".$p["p_type"]."</td>";
						echo "<td>".$p["p_category"]."</td>";
						echo "<td>".$p["p_area"]."</td>";
						echo "<td>".$p["p_location"]."</td>";
						echo "<td>".$p["p_price"]."</td>";
						
						echo "<td>".$p["p_photo"]."</td>";
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
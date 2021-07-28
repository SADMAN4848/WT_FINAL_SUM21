<?php 
	$c_uname=$_GET["c_uname"];
	include 'headers/admin_header.php';
	require_once 'controllers/PropertiesController.php'; 
	$pr= getCustomerWithUsername($c_uname);
?>
<h2 class="text"><img src="images/login.png" align="center"> Welcome Back <?php echo $pr["c_name"];?>!</h2>
<div class="center">
	<form action="" method="post">
		<div class="form-group">
			<h3 class="text">Search Property</h3>
			<input type="text" placeholder="Location" name="p_location"  class="form-control">
			
			<select name="p_type">
			<option>Select type</option>
								
			<?php
			$all_types = array('For Sell','For Rent');
			foreach($all_types as $m){
			if($m == $p_type)
				echo "<option selected>$m</option>";
			else
				echo "<option>$m</option>";
								}
			?>
			</select>
			<select name="p_category">
			<option>Select categoty</option>
								
			<?php
			$all_categoty = array('Flat','House','Plot');
			foreach($all_categoty as $n){
			if($m == $p_type)
				echo "<option selected>$n</option>";
			else
				echo "<option>$n</option>";
								}
			?>
			</select>
		
			
			<input type="submit" name="btn_search" class="btn-search" value="Search" >
			<span style="color:red"><?php echo $err_p_location; ?></span>
		</div>
		
	</form>
</div>

<div class="center">
	<h2 class="text">Top charts</h2>
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

<h2 class="text"><img src="images/customersupport.jpg" align="center">Having Trouble? Send us a message    <a href="faqSubmit.php?c_uname=<?php echo $c_uname ?> " class="btn-success">Proceed to FAQ</a></h2>
 


<?php include 'admin_footer.php';?>
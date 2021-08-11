<?php 
	session_start();
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	include 'headers/admin_header.php';
	require_once 'controllers/PropertiesController.php'; 
?>
<br><center>
		<h3 class="textNewBlue">Sample Slideshow</h3>
		<img id="photo" src="javaScripts/slideshow/1Mirpur.jpg"><br><br>
		<button onclick="pic1()" class="btn-search">1</button>
		<button onclick="pic2()" class="btn-search">2</button>
		<button onclick="pic3()" class="btn-search">3</button>
		<button onclick="pic4()" class="btn-search">4</button>
		<button onclick="pic5()" class="btn-search">5</button>
		<button onclick="pic6()" class="btn-search">6</button>
		<button onclick="pic7()" class="btn-search">7</button>
		<button onclick="pic8()" class="btn-search">8</button>
		<button onclick="pic9()" class="btn-search">9</button>
		
		
		<script src = "javaScripts/slideshow.js"></script>
	</center>
<div class="center">
	<h1 class="textNewBlue">Top charts</h1>
	<table class="table">
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
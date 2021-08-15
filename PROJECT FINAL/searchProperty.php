<?php 
	session_start();
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	$c_uname=$_SESSION["loggedCustomer"];
	include 'headers/admin_header.php';
	require_once 'controllers/PropertiesController.php'; 
	$pr= getCustomerWithUsername($c_uname);
?>


<h2 class="textBlue"><img src="images/login.png" align="center"> Welcome Back <?php echo $pr["c_name"];?>!</h2>
<div class="center">

<center><img src="images/citynight.jpg" align="center"></center><br>
	<form action="" method="post">
		<div>
			<h2 class="textNewBlue">Search Property</h2>
			<input type="text" placeholder="Location" name="p_location" onkeyup="searchLocation(this)" class="form-control" style="padding: 8px 10px;">
			
			<select name="p_type" class="selectbox">
			<option selected disabled>Select type</option>
								
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
			<select name="p_category" class="selectbox">
			<option selected disabled>Select categoty</option>
								
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
			
			<h4><div id="suggestion"></div></h4>
			<span style="color:red"><?php echo $err_p_location; ?></span>
			<span style="color:red"><?php echo $err_p_type; ?></span>
			<span style="color:red"><?php echo $err_p_category; ?></span>
		</div>
		<h4 class="textBlue">Most recent searched location : <?php if(!isset($_COOKIE["searchhistory"])){
				echo "No search found";
				}
				else echo $_COOKIE["searchhistory"];
				?></h4>
	</form>
</div>
<div class="center">
			<button id="btn_all" onclick="viewGForm()" class="btn-success" style="padding: 8px 10px;">Search from everything</button>
			<form id="all_search" style="display:none;">
			<input type ="text" style="padding: 8px 10px;" placeholder="Search..." onkeyup="searchAll(this)"><br>
			</form>
			<h4><div id="searchResultAll"></div></h4>
</div>

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

<h2 class="textNewBlue"><img src="images/customersupport.png" align="center">Having Trouble? Send us a message    <a href="faqSubmit.php" class="btn-success">Proceed to FAQ</a></h2>
 
<script src ="javaScripts/locations.js"></script>
<script src ="javaScripts/searchFromAll.js"></script>

<?php include 'admin_footer.php';?>
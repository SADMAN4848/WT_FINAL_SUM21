<?php include 'headers/homepage_header.php';
require_once 'controllers/PropertiesController.php'; 
?>  
  
		
	<br><br>
	<div>
	<center>
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
	</div>
	
	<h1 class="textBlue">Get Started!</h1> 						
			
			<h3 class="textNewBlue">New here? <a href="SignupWhere.php" class="btn-success">Sign up</a></h3>
			<h3 class="textNewBlue">Already have an account? <a href="SigninWhere.php" class="btn-success">Sign in</a></h3>           
	
	
	<div class="center">
	<h1 class="textNewBlue">Be a member and browse through properties!</h1>
	<table class="table table-stripped">
		<thead>
			<th> #No</th>
			<th> Photo</th>
			<th> Type</th>
			<th> Category</th>
			<th> Area</th>
			<th> Location </th>
			<th> Price</th>
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
						
						
						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<h4 style="font-family: Arial">Project By :</h4>
			<h5 style="font-family: Arial">Md. Sadman Rahman  18-38832-3</h5>
			<h5 style="font-family: Arial">Niaz Rahman Bhuiyan  18-38770-3</h5>
			<h5 style="font-family: Arial">Hasan Sanjary Islam  19-39589-1</h5>
			<h5 style="font-family: Arial">Anik Nur  18-38875-3</h5>
	</body>
</html>
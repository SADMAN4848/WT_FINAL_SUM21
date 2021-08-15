<?php 
	session_start();
	if(!isset($_SESSION["loggedCustomer"])){
		header("Location: loginCustomer.php");
	}
	include 'headers/admin_header.php';
	require_once 'controllers/AdminController.php'; 
?>

<div class="center">
	<h1 class="textNewBlue">Notices</h1>
	<table class="table">
		<thead>
			<th> Details</th>
			<th></th>
			
		</thead>
		<h1><tbody>
			<?php
				$notices = getNotices();
				foreach($notices as $p){
					echo "<tr>";
						echo "<td><h2 class='textBlue'>".$p["a_notice"]."</h2></td>";
									
					echo "</tr>";
					
				}
			?>
			
		</tbody></h1>
	</table>
</div>




<?php include 'admin_footer.php';?>
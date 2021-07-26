<?php include 'admin_header.php';
	require_once 'controllers/CustomerController.php';
	$c_uname = $_GET["c_uname"];
	$pr= getCustomerWithUsername($c_uname);
	
?>

<div class="center">
	<h3 class="text">Search Results</h3>
	<table class="table table-striped">
		<thead>
			<th> #No</th>
			<th> Your Query</th>
			<th> Reply</th>
			
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$reply = getFaqReply($pr["c_id"]);
				$i=1;
				foreach($reply as $p){
					
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$p["f_details"]."</td>";
						echo "<td>".$p["f_reply"]."</td>";
						
						
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>


<div class="center">
<h1 class="text">Ask a Question</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="">
		<div class="form-group">
			<h4 class="text">Your Question:</h4> 
			<input type="text" name="f_details" class="form-control">
		</div>
		
		
		<div class="form-group">
			
			<input type="hidden" name="c_id" value="<?php echo $pr["c_id"];?>" class="form-control">
		</div>
		<br>
		<div class="form-group text-center">
			
			<input type="submit" name="send_faq" class="btn-success" value="Update" class="form-control">
		</div>
		
	</form>
</div>
<?php include 'admin_footer.php';?>
<?php
	session_start();
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
		<a href="">Add Product</a>
		<a href="">All Product</a>
		<a href="">All Categories</a>
		<br>
		<form action="" method="post">
			 Id: <input type="text" name="uid" value=""><br>
			 Name: <input type="text" name="uname" value=""><br>
			 Price: <input type="text" name="uprice" value=""><br>
			 Quantity: <input type="text" name="uquantity" value=""><br>
			 
			 <input type="submit" value="Add">
	</body>
</html>
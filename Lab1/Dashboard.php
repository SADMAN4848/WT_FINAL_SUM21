<?php
	session_start();
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
		<a href="AllProduct.php">Add Product</a>
		<a href="">All Product</a>
		<a href="">All Categories</a>
	</body>
</html>
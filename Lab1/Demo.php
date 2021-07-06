<?php
	session_start();
	$uname="";
	$err_uname="";
	$password="";
	$err_password="";
	$hasError=false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["uname"])){
               $err_uname="*Please enter uname";
            }

    else{
		$uname=$_POST["uname"];
                }
	
	
	
	echo "Invalid username";
	
	if(empty($_POST["password"])){
		$hasError=true;
		$err_password="*Password Required";
	}
	
	else{
		$password=$_POST["password"];
	}
	if(!$hasError){
		if($uname == "sadman" && $password=="1234"){
			$_SESSION["loggeduser"] = $uname;
			header("Location: Dashboard.php");
	}
}
}
?>


<html>
	<body>
	<fieldset>
		<legend><h1>Sign in</h1></legend>
		<form action="" method="post">
			<table>
			<tr>
				<td align="right" ><span>Username</span></td>
				<td>: <input type="text" name="uname"> <span style="color:red"><?php echo $err_uname; ?></span>
                </td>
            </tr>
			
			<tr>
                <td align="right" ><span>Password</span></td>
                <td>: <input type="password" name="password"> 
				<span style="color:red"><?php echo $err_password; ?></span>
				</td>
            </tr>
			
			</table>
			<input type="submit" value="Login">
		</form>
		</fieldset>
	</body>
</html>
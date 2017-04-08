<?php if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$username=$_POST['username'];
			$message= "Loggin in ".$username;
		}
		else{
			$message= "not logged in";
			} ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<?php echo $message; ?>
	<form action="form_single.php" method="post">
		Username:<input type="text" name="username" value=""> <br>
		Password:<input type="password" name="password" value=""><br>
		<input type="submit" name="submit" value="Submit">
	</form>


</body>
</html>
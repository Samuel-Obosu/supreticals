<?php 
	session_start();
	include("includes/db_connect.php");
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT SupplierID FROM supplier WHERE Email = '$email' AND Password = '$password'";
	echo $sql;

	$result = mysqli_query($connection, $sql);
	if($data=mysqli_fetch_assoc($result)){
		header("location:index.php");
		$_SESSION['supplier_id'] = $data['SupplierID'];
	}
	else{
		header("location:login.php?message=wrong email or password");
	}
?>
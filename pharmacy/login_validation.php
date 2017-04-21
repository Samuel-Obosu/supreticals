<?php 
	session_start();
	include("includes/db_connect.php");
	$email = htmlspecialchars($_POST['email']);
	$password =htmlspecialchars($_POST['password']);
	$payment_method = $_POST['payment_method'];
	echo $email;
	echo $password;
	
	$sql = "SELECT * FROM retailer WHERE Email= '$email' AND Password = '$password'";
	 $result = mysqli_query($connection, $sql);
	 if($data = mysqli_fetch_assoc($result)){
	 	$_SESSION['RetailerID'] = $data['RetailerID'];
	 	$_SESSION['contact'] = $data['Contact'];
	 	$_SESSION['payment_method'] = $payment_method;
	 	header("location: checkout.php?id=login");
	 }
	 else{
	 	header("location: index.php?content=login&message=login%20failed");
	 }

?>
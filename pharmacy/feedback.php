<?php 
	include("includes/db_connect.php");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "INSERT INTO customer_feedback VALUES('$name', '$email', '$subject', '$message')";
	$data = mysqli_query($connection, $sql);
	if($connection->affected_rows==1){
	 			$message ="Thank you for your Feedback!";
	 		}
	 		else{
	 			$message = "Please Resend Feedback!";
	 		}
	header("location:index.php?message=$message");
 ?>
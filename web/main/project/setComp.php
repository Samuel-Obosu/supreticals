<?php
	session_start();
	include('../dbConnect.php');
	$id= $_SESSION['reqId'];
	$sql="UPDATE project SET ProjectStatus='Completed' WHERE ProjectRequestID=$id";
	echo $sql;
	$data=mysqli_query($connection,$sql);
	$result=mysqli_fetch_assoc($data);
	if($data){
		header("location: ../../starter.php?page=projCompletion");
	}
 ?>

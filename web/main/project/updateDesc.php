<?php
	session_start();
	include('../dbConnect.php');
	$desc=$_POST['description'];
	$id= $_SESSION['id'];
	$date = date("Y-m-d");
	$descId= $_SESSION['descId'];
	$sql="INSERT INTO projectdescription VALUES($descId,$id,'$desc','$date')";
	echo $sql;
	$data=mysqli_query($connection,$sql);
	$result=mysqli_fetch_assoc($data);
	if($data){
		header("location: ../../starter.php?page=projOverview");
	}
 ?>

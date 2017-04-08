<?php
	include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/connection.php';
	$query ="SELECT supName,Password FROM supplier";
	$result = mysqli_query($connection, $query);
	$data = mysqli_fetch_assoc($result);

	$username=$_POST['username'];
	$Password =$_POST['Password'];

	while($data = mysqli_fetch_assoc($result)){
		if($username= $data['supName']){
			
		}
	}	
 ?>
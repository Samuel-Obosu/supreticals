<?php
	include("includes/db_connect.php"); 
	$order_id = $_GET['order_id'];
	$sql = "DELETE FROM tblorder WHERE orderID = '$order_id'";
	$result = mysqli_query($connection, $sql);
	if($connection->affected_rows==1){
		header("location: index.php?content=view_orders");
	}
 ?>
<?php
	session_start();
	$id=$_SESSION['submit'];
	include('../dbConnect.php');
	

	$sql = "INSERT INTO project(ProjectRequestID,Deadline,ProjectName) 
	VALUES( SELECT ProjectRequestID,Deadline,RequestName FROM projectrequest WHERE ProjectRequestID=$id; )"

 ?>
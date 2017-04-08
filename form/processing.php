<?php
	$dbhost="localhost";
	$dbuser="widget_cms";
	$dbpass="frisky";
	$dbname="widget_corp";
	$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	$id =$_POST['identification'];
	$sql = "SELECT Name, Course, Level FROM student WHERE Id = $id";
	$result= mysqli_query($connection,$sql);
	if(!mysqli_fetch_assoc($result)){
		include('form.php');
	}
	else{
		include('page.php');
	}

?>
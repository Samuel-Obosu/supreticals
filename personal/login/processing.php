<?php  
	session_start();
	include('../db_connect.php');
	$uname= $_POST['uname'];
	$pass= $_POST['pass'];
	$sql="SELECT supName, Password FROM supplier WHERE supName='$uname' AND Password='$pass'";
	$data=mysqli_query($connection, $sql);
	//echo $data['supName'];
	//echo $data['Password'];
	$result=mysqli_fetch_assoc($data);
	if(mysqli_num_rows($data)>=1){
		header("location: ../main.php");
	}else{
		header("location: login.php");
		//$message="wrong Email or Password";
		//$_SESSION['message']=$message; 
	}
?>
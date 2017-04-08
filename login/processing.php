<?php  
	session_start();
	include('./dbConnect.php');
	$email= $_POST['uname'];
	$pass= $_POST['pass'];
	password_hash($pass, PASSWORD_DEFAULT); //encryption
	$sql="SELECT Email, PassWord FROM personel WHERE Email='$email' AND PassWord='$pass'";
	$data=mysqli_query($connection, $sql);
	$result=mysqli_fetch_assoc($data);
	if(mysqli_num_rows($data)>=1){
		header("location: setPass.php");
	}else{
		header("location: index.php");
		$message="wrong Email or Password";
		$_SESSION['message']=$message; 
	}
?>
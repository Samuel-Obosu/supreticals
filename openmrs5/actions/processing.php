<?php  session_start();
	include('../config.php');
	$email=mysqli_real_escape_string($connection, $_POST['uname']);
	$pass=mysqli_real_escape_string($connection, $_POST['pass']);
	password_hash($pass, PASSWORD_DEFAULT); //encryption
	//prepared statement of case sensitive email and password
	$sql= $connection->prepare("SELECT * FROM personel WHERE BINARY Email=BINARY ? AND  BINARY Password=BINARY ?");
	$sql->bind_param("ss", $email, $pass);
	$res=$sql->execute();

	//fetch details
	$res = $sql->get_result();
	$result=$res->fetch_assoc();
	$numrows=count($result);
	if($numrows==6){
		$_SESSION['recPid']=$result['RecPid'];
		$_SESSION['fullName']=$result['FullName'];
		$_SESSION['pType']=$result['Position'];
		$_SESSION['page']="view.php";
		if($_SESSION['pType']=="s1"){
			$_SESSION['spage']="stage/stage1.php";
		}elseif($_SESSION['pType']=="s2") {
			$_SESSION['spage']="stage/stage2.php";
		}elseif($_SESSION['pType']=="s3") {
			$_SESSION['spage']="stage/stage3.php";
		}elseif($_SESSION['pType']=="s4") {
			$_SESSION['spage']="stage/stage4.php";
		}elseif($_SESSION['pType']=="s5") {
			$_SESSION['spage']="stage/stage5.php";
		}elseif($_SESSION['pType']=="s6") {
			$_SESSION['spage']="stage/uploading.php";
		}elseif($_SESSION['pType']=="s7"){
			$_SESSION['spage']="stage/stage7.php";
		}

		if($pass==$xnr){
			header("location: setPass.php");
		}else{
			if($_SESSION['pType']=="s1"){
				header("location:../view.php");
			}else{
				header("location:../findper.php");
			}
		}
	}else{
		header("location:../index.php?q=1");
		//$_SESSION['message']=$message;
	}
?>

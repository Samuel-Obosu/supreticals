<?php
	session_start();
	include('../config.php');
	$oldP= mysqli_real_escape_string($connection, $_POST['oldP']);
	$newP= mysqli_real_escape_string($connection, $_POST['newP']);
  $confP=mysqli_real_escape_string($connection, $_POST['confP']);
  $recPid=mysqli_real_escape_string($connection, $_SESSION['recPid']);

  if(strtoupper($newP)!=strtoupper($confP)){
		//Confirmation pass different from new password
    header("location:setPass.php?q=1");
  }elseif (strtoupper($newP)==strtoupper($xnr)) {
		//new password same as default password
    header("location:setPass.php?q=2");
  }elseif(strtoupper($oldP)!=strtoupper($xnr)){
		//old password not the same as default password
    header("location:setPass.php?q=3");
  }elseif ($newP==$confP){
		
  	password_hash($newP, PASSWORD_DEFAULT); //encryption
    $sql= $connection->prepare("UPDATE personel SET Password=? WHERE RecPid=?");
  	$sql->bind_param("si", $newP, $recPid);
    if($sql->execute()){
			if($_SESSION['pType']=="s1"){
				header("location:../view.php");
			}else{
  			header("location:../findper.php");
			}
  	}else{
  		header("location:../index.php?q=1");
  	}
  }else{
    header("location:../index.php?q=1");
  }
?>

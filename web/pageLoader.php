<?php 	session_start();
	//$accType=$_SESSION['accType'];
	//$membId=$_SESSION['Memberid'];
	$accType='admin';
	$_SESSION['MemberId']=5;
	$_SESSION['accType']='admin';
	$menu="";
	switch ($accType) {
		case 'admin':
			include('components/pageLoader/adminLoader.php');
			$menu='components/menu/adminMenu.php';
			break;
			break;
		
		case 'partner':
			# code...
			break;

		case 'associate':
			include('components/pageLoader/assocLoader.php');
			$menu='components/menu/associateMenu.php';
			break;

		default:
			//TODO: take you back to login
			# code...
			break;
	}
?>

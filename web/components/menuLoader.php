<?php
	$accType=$_SESSION['accType'];

	switch ($accType) {
		case 'admin':
			include('component/menu/adminMenu.php');
			break;
		
		case 'partner':
			# code...
			break;

		case 'associate':
			include('component/menu/associateMenu.php');
			break;

		default:
			//TODO: take you back to login
			# code...
			break;
	}

?>

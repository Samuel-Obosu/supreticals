<?php
	$accType=$_SESSION['accType'];
	$accType='associate';
	$menu="";
	switch ($accType) {
		case 'admin':
			# code...
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

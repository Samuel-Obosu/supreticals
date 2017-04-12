<?php 
	if(isset($_GET['view'])){
		$view = $_GET['view'];
	}
	else{
		$view = "main";
	}

	switch ($view) {
		case 'main':
			$content = "main.php";
			break;
		case 'about':
			$content = "about.php";
			break;	
		case 'services':
			$content = "services.php";
			break;
		case 'contact':
			$content = "contact.php";
			break;	
		case 'cust_care':
			$content = "cust_care.php";
			break;
		case 'cremation':
			$content = "cremation.php";
			break;
		case 'burial':
			$view = "burial.php";
			break;
		case 'fun_services':
			$view = "fun_services";
			break;
		
		default:
			# code...
			break;
	}

?>
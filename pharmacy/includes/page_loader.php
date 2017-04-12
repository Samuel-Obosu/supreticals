<?php 
	//$content = $_GET['content'];
	if(isset($_GET['content'])){
		$content = $_GET['content'];
	}
	else{
		$content = 'home';
	}

	switch ($content) {
		case 'home':
			$page ="main.php";
			break;
		case 'about':
			$page ="about.php";
			break;
		case 'contact':
			$page ="contact.php";
			break;
		case 'faq':
			$page ="faq.php";
			break;
		case 'login':
			$page ="login.php";
			break;
		case 'sign_up':
			$page ="sign_up.php";
			break;
		case 'product_detail':
			$page ="product_detail.php";
		default:
			# code...
			break;
	}
?>
<?php 
	$page=$_GET["?page"];
	switch ($page) {
		case 'about':
			$content="home.php";
			break;
		case 'services':
			$content="services.php";
			break;
		case 'solutions':
			$content="solutions.php";
			break;
		default:
			# code...
			break;
	}
?>
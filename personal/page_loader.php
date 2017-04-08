<?php 
	if(isset($_GET['view'])){
		$view= $_GET['view'];
	}
	else{
		$view ="index.php";
	}

	switch ($view) {
		case 'index':
			$content= "index.php";
			break;

		case 'products':
			$content="products.php";
			break;

		case 'order':
			$content ="order.php";
			break;

		case 'logistics':
			$content ="logistics.php";
			break;

		case 'about':
			$content ="about.php";
			break;

		default:
			$content ="index.php";
			break;
	}

 ?>
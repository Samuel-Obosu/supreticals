<?php 
	if(isset($_GET['content'])){
		$view = $_GET['content'];
	}
	else{
		$view = "view_orders";
	}

	switch ($view) {
		case 'view_orders':
			$content = "view_orders.php";
			break;
		case 'modify_product':
			$content = "modify_product.php";
			break;
		case 'add_product':
			$content = "add_product.php";
			break;
		case 'edit_product':
			//$_SESSION['product_id'] = $_GET['product_id'];
			$content = "edit_product.php";
			break;
		
		default:
			# code...
			break;
	}
 ?>
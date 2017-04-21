<?php  
	include("includes/db_connect.php");
	$product_id = $_GET['product_id'];
	$sql = "SELECT * FROM products WHERE ProductID = '$product_id'";
	$result = mysqli_query($connection, $sql);
	$data = mysqli_fetch_assoc($result);

	if($_POST['product_name']!=""){
		$product_name = $_POST['product_name'];
	}
	else{
		$product_name = $data['ProductName'];
	}

	if($_POST['description']!=""){
		$product_description = $_POST['description'];
	}
	else{
		$product_description = $data['Description'];
	}

	if($_POST['price']!=""){
		$product_price = $_POST['price'];
	}
	else{
		$product_price = $data['UnitPrice'];
	}

	if($_POST['quantity']!=""){
		$product_quantity = $_POST['quantity'];
	}
	else{
		$product_quantity = $data['ProductQty'];
	}

	$sql = "UPDATE products SET ProductName = '$product_name', Description= '$product_description', ProductQty= '$product_quantity', UnitPrice = $product_price WHERE ProductID = $product_id";
	$result = mysqli_query($connection, $sql);
	if($connection->affected_rows==1){
		header("location: index.php?content=modify_product");
	}


?>
<?php 
	session_start();
	include("includes/db_connect.php");
	if(!isset($_GET['id'])){
		$id = "";
	} 
	 	
	if($_GET['id'] == 'detail'){
		header("location: index?content=login");
	}
	elseif ($_GET['id'] == 'login' || $_GET['id'] == 'sign_up') {

		if ($_GET['id'] == 'sign_up') {
			$first_name = $_POST['firstname'];
			$last_name = $_POST['lastname'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];
			$org_name = $_POST['org_name'];
			$org_email = $_POST['org_email'];
			$password = $_POST['password'];
			$location = $_POST['location'];
			$payment_method = $_POST['payment_method'];

			//inserting new retailer record
			$sql = "INSERT INTO retailer(FirstName, LastName, Email, OrgName, OrgEmail, Password, Contact, Location, PaymentMode) VALUES('$first_name', '$last_name', '$email', '$org_name', '$org_email', '$password', '$contact', '$location', '$payment_method')";
			$result = mysqli_query($connection, $sql);

			//fetching id of new retailer
			$sql = "SELECT RetailerID FROM retailer WHERE Email= '$email' AND Password = '$password'";
	 		$result = mysqli_query($connection, $sql);
	 		$data = mysqli_fetch_assoc($result);
	 		$retailer_id = $data['RetailerID'];
		}
		elseif ($_GET['id'] == 'login') {
			$retailer_id = $_SESSION['RetailerID'];
		 	echo $retailer_id;

		 	$contact = $_SESSION['contact'];
		 	echo $contact;

		 	$payment_method = $_SESSION['payment_method'];
		 	echo $payment_method;
		}

		//getting the product_id from the product_detail page
	 	$product_id = $_SESSION['pID'];
		
		//getting the quantity from the product_detail page
	 	$quantity = $_COOKIE['quantity'];
	 	



	 	$sql ="SELECT SupplierID,ProductQty FROM products WHERE ProductID = $product_id ";
	 	$result = mysqli_query($connection, $sql);
	 	$data = mysqli_fetch_assoc($result);
	 	$supplier_id = $data['SupplierID'];
	 	$product_qty = $data['ProductQty'];


	 	$sql ="INSERT INTO tblorder(SupplierID, RetailerID, ProductID, Quantity) VALUES('$supplier_id', '$retailer_id', '$product_id', '$quantity')";
	 		echo $sql;
	 		$result = mysqli_query($connection, $sql);
	 		if($connection->affected_rows==1){
	 			$message ="Order Recorded !";
	 		}
	 		else{
	 			$message = "Order not Recorded !";
	 		}

	 	$sql ="UPDATE products  SET ProductQty= $product_qty-$quantity WHERE ProductID = $product_id";
	 	$result = mysqli_query($connection, $sql);

	 		header("location: index.php?message=$message");

		
	}
	
 ?>
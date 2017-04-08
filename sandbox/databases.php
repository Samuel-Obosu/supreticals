<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "frisky";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

	//Test if connection occured.
	if(mysqli_connect_errno()) {
		die("Database connection failed: ". 
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
	}
 ?>

 <?php 
 	// Perform database query
 	$query = "SELECT * FROM subjects ";
 	$query.= "WHERE visible =1 ";
 	$query.= "ORDER BY position ASC";

 	$result = mysqli_query($connection, $query);
 	if (!$result) {
 		die("Databases query failed.");
 	}
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Databases</title>
</head>
<body>
	<ul>
	<?php  
		//Use returned data if any
		while ($subject = mysqli_fetch_assoc($result)) {
			?>
		<li> <?php echo $subject["menu_name"]; ?></li>	
		<?php
		}
		?>
	</ul>	

	<?php 
	// Release returned data
	mysqli_free_result($result);

	 ?>

</body>
</html>

<?php // close the database connection
	mysqli_close($connection); 
	?>
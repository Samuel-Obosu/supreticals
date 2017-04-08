<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "frisky";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser,$dbpass, $dbname );
	if(mysqli_connect_errno()){
		die("Database connection failed: ". mysqli_connect_error(). " (" . mysqli_connect_errno(). ")" );
	}
 ?>
 <?php 
 	$query = "SELECT * FROM subjects";
 	$result = mysqli_query($connection, $query);
  	if(!$result){
  		die("database query failed");
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
	while($row = mysqli_fetch_assoc($result)){
	?>
		<li> <?php echo $row["menu_name"]; ?></li>	
	<?php 
		} 
	?>
 	
 <?php  
 	mysqli_free_result($result); 
 ?>
	</ul>
</body>
</html>
<?php  
	mysqli_close($connection);
?>
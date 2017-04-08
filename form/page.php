<?php
	$dbhost="localhost";
	$dbuser="widget_cms";
	$dbpass="frisky";
	$dbname="widget_corp";
	$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data</title>
</head>
<body>
	<?php echo $sql;?>
	<p>Name: <?php echo $data['Name']; ?> </p>
	<p>Course: <?php echo $data['Course']; ?> </p>
	<p>Level: <?php echo $data['Level']; ?></p>
</body>
</html>
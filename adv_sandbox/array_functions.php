<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
	<?php
		$array = array('a','b','c','d');
		print_r($array);
		echo "</br>";
		$a = array_shift($array);
		print_r($array);
		echo "</br>";
		array_unshift($array, 'e');
		print_r($array);
		echo "</br>";

	 ?>
</body>
</html>
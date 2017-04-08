<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>

	<?php 
		$numbers =[2,23,56,12,16,5];
	?>
	Count:	<?php echo count($numbers);  ?> <br>
	Max:	<?php echo max($numbers);  ?> <br>
	Min:	<?php echo min($numbers);  ?> <br>

	<pre>
	Sort:	<?php sort($numbers);  print_r($numbers) ?> <br>
	Reverse sort:	<?php rsort($numbers); print_r($numbers);  ?>
	</pre>

	Implode: <?php  echo $num_string = implode(" * ", $numbers) ?> <br>
	Explode: <?php print_r (explode(" * ", $num_string)); ?> <br>

	15 in array: <?php echo in_array(25, $numbers); ?> <br>
	16 in array: <?php echo in_array(16, $numbers); ?> <br>
	<?php echo (int) "6"; ?> <br>
	<?php 
		$num =6;
	 	echo settype($num, "String") ?>

</body>
</html>
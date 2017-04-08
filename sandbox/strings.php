<!DOCTYPE html>
<html>
<head>
	<title>Variables</title>
</head>
<body>
	<?php 
	$first ="The quick brown fox";
	$second =" jumped over the wall";

	$third = $first.$second;
	echo "$third";
	echo "<br/>";
	echo strtolower($first); 
	echo "<br/>";
	echo strtoupper($first);
	echo "<br/>";
	echo ucfirst($third);
	echo "<br/>";
	echo ucwords($third);
	echo "<br/>";
	echo strlen($third);
	echo "<br/>";
	echo "A" . trim(" B C D") . "E";
	echo "<br/>";
	echo strstr($third, "brown");
	echo "<br/>";
	echo str_replace("quick", "super-fast", $third);
	?>
</body>
</html>
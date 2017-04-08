<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	
	<?php 
		$name ="test";
		$value ="hello";
		$time = time()+(60*60);

		setcookie($name,$value,$time);
	 ?>


	<pre>
		<?php 
			$test = $_COOKIE["test"];
			echo "{$test}";
		 ?>
	</pre>
</body>
</html>
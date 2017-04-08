<?php 
	function redirect_to($url){
		header("Location: ".$url);
		exit;
	}

	$logged_in=$_GET['logged_in'];
	if($logged_in==1){
		redirect_to("basic.html");
	}
	else{
		redirect_to("strings.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Redirect</title>
</head>
<body>

</body>
</html>
<?php  
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sunlife";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


	function freeResult($result){
		mysqli_free_result($result);
	}

	function closeConn(){
		mysqli_close($GLOBALS['$connection']);
	}

 ?>

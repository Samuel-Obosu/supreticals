<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="sunlife5";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	$xnr="MedFocus";

//	function freeResult($result){
//		mysqli_free_result($result);
	//}

//	function closeConn(){
	//	mysqli_close($GLOBALS['$connection']);
	//}

	function mysqli_date(){
      $dt=time();
      $mysql_date=strftime("%Y-%m-%d %H:%M:%S", $dt);
      return  $mysql_date;
    }

		function format_date($dt){
			//$dt=time();
			$mysql_date=strftime("%Y-%m-%d", $dt);
			return  $mysql_date;
		}
 ?>

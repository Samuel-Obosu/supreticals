<?php
	session_start();
	
	//unset($_SESSION[], $_SESSION[]) used to destroy some session variables
	//used to destroy all the session variables
	session_destroy();
	
	header('location:index.php?q=3');
?>

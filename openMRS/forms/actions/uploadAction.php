<?php
require("../config.php");

$fileName;
$filedir="../uploads/";
if(isset($_POST["submit"]))
{
	$stat="Submitted";

	 if (($_FILES["upload"]["type"]=="image/jpeg")||($_FILES["upload"]["type"]=="gif")||
			 ($_FILES["upload"]["type"]=="jpg")||($_FILES["upload"]["type"]=="pjpeg")||
			 ($_FILES["upload"]["type"]=="x-png")||($_FILES["upload"]["type"]=="png")) {	
			//echo "image";
			//image file
			$fileName=$filedir.$_FILES["upload"]["name"];
			$query = "INSERT INTO userfiles_tbl (user_pdf) VALUES ('$fileName')";					
	}else if ($_FILES["upload"]["type"]=="application/pdf"){ 
		//echo "PDF file";
		//pdf
		$stat="Submitted";
		$fileName=$filedir.$_FILES["upload"]["name"];
		$query = "INSERT INTO userfiles_tbl (user_pdf) VALUES ('$fileName')";

	}
		if (move_uploaded_file($_FILES["upload"]["tmp_name"], $fileName)) { 
			//echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
			$data=mysqli_query($connection, $query);

				if($data){  
					$stat=1;
				  header("location:../sunlife.php?stat=$stat&page=upf");
				}else{
					echo $query;
					$stat=3;
				header("location:../sunlife.php?stat=$stat&page=upf");	
				}
			} else {  
			//echo "Sorry, there was an error uploading your file.";
				$stat=2;
				header("location:../sunlife.php?stat=$stat&page=upf");
			}
}

?>
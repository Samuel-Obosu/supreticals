<?php
session_start();
require("../config.php");
$recPid=$_SESSION['recPid'];
$page=$_SESSION['page'];
$fileName="";
$filedir="../id/";
date_default_timezone_set("Africa/Accra");
$dat=date('Y/m/d');



	//  if (($_FILES["upload"]["type"]=="image/jpeg")||($_FILES["upload"]["type"]=="gif")||
	// 		 ($_FILES["upload"]["type"]=="jpg")||($_FILES["upload"]["type"]=="pjpeg")||
	// 		 ($_FILES["upload"]["type"]=="x-png")||($_FILES["upload"]["type"]=="png")) {
  //
	// 		$fileName=$filedir.$_FILES["upload"]["name"];
  //
	// }else if ($_FILES["upload"]["type"]=="application/pdf"){
	// 	$fileName=$filedir.$_FILES["upload"]["name"];
  //
	// }
  //
  //   if (move_uploaded_file($_FILES["upload"]["tmp_name"], $fileName)) {
      foreach($_POST as $field => $value){
              $f=mysqli_real_escape_string($connection,$field);
              $v=mysqli_real_escape_string($connection,$value);
      				if($field != "IdCopy") {
      					$fields .=$next.$f;
      					$values .=$next."'".$v."'";
      					$next=",";
      				}
      			}
      				//inserting into the database
      			$sql="INSERT INTO patientbios ( $fields,  RecDate, RecPid)
            values($values, '$dat','$recPid')";

            $data=mysqli_query($connection, $sql);
            if($data){
                  header('location:../view.php?q=1');
            }else{
                  header('location:../view.php?q=2');
            }
    // }else {
    //   echo "error 1";
    // }
  // }else{
  //   echo "error 2";
  // }

?>

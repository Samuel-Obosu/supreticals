<?php
session_start();
include('../config.php');
$pid=$_SESSION['q'];
$recPid=$_SESSION['recPid'];
$page=$_SESSION['page'];
// date_default_timezone_set("Africa/Accra");
$date=mysqli_date();
// $ht=$_POST['DiagA1'];
// $wt=$_POST['DiagA2'];
// $bmi=round($wt/($ht*$ht), 1);

// echo $_POST['DiagC1'];
foreach($_POST as $field => $value){
				$f=mysqli_real_escape_string($connection,$field);
				$v=mysqli_real_escape_string($connection,$value);
				// if(($value != $tbl_name) && ($value != $queryType)){
					$fields .=$next.$f;
					$values .=$next."'".$v."'";
					$next=",";

				// }
			}
				//inserting into the database
			$sql="INSERT INTO summary (PId, $fields,RecPid,RecDate) values('$pid',$values, '$recPid', '$date')";
			//echo $sql;
      $data=mysqli_query($connection, $sql);

      if($data){
            header('location:../findper.php?q=1');
      }else{
            header("location:../{$page}?err=1");
      }
?>

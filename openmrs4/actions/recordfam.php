<?php
  session_start();
  include ('../config.php');
  //print_r($_POST);
  $pid=$_SESSION['q'];
  $page=$_SESSION['page'];

  foreach($_POST as $field => $value){
          if($value!=''){
    				$f=mysqli_real_escape_string($connection,$field);
    				$v=mysqli_real_escape_string($connection,$value);
    					$fields .=$next.$f;
    					$values .=$next."'".$v."'";
    					$next=",";
          }
  			}

   $sql="INSERT INTO familyinfo(Pid,$fields)
       VALUES('$pid',$values)";

  //echo $sql;
  $info=mysqli_query($connection, $sql);
  if($info){
    //echo "<div class='alert alert-success'>Family Record Saved Succcessfully</div>";
    //$SESSION["dis"]="Family Record Saved Succcessfully";
    header("location:../$page");
  }else{
    //echo "<div class='alert alert-success'>Failed to Save Record</div>";
    //$SESSION["dis"]="Failed to Save Record";
    header("location:../$page");
  }
  //freeResult($info);
?>
